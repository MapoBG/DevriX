<?php
namespace Services\Users;

 use Data\Users\UserDTO;
 use Repositories\Users\UserRepositoryInterface;
 use Services\Encryption\EncryptionServiceInterface;

 class UserService implements UserServiceInterface
{
    const MIN_USER_LENGTH = 4;

    private UserRepositoryInterface $userRepository;

    private EncryptionServiceInterface $encryptionService;

     public function __construct(UserRepositoryInterface $userRepository, EncryptionServiceInterface $encryptionService)
     {
         $this->userRepository = $userRepository;
         $this->encryptionService = $encryptionService;
     }


     public function registerUser(UserDTO $userDTO)
    {
        if(!$userDTO->getPassword() || !$userDTO->getUsername() || !$userDTO->getRePass()) {
            throw new \Exception(message: "All fields must be filled");
        }

        if($userDTO->getPassword() !=$userDTO->getRePass()){
            throw new \Exception(message: "Password mismatch");
        }

        if(strlen($userDTO->getUsername()) < self::MIN_USER_LENGTH) {
            throw new \Exception(message: "Username length must be at least 4 chars long");
        }

        $passwordHash = $this->encryptionService->hash($userDTO->getPassword());
        $userDTO->setPassword($passwordHash);

        $this->userRepository->registerUser($userDTO);
    }

     public function verifyCredentials(string $username, string $password): bool
     {
         $user = $this->userRepository->getByUsername($username);

         return $this->encryptionService->verify($password, $user->getPassword());
     }

     public function findByUsername(string $username): UserDTO
     {
         return $this->userRepository->getByUsername($username);
     }

     public function findById(int $id): UserDTO
     {
         return $this->userRepository->getById($id);
     }
 }
