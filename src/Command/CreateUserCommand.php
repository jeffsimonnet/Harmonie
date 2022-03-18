<?php

namespace App\Command;

use App\Service\UserManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'app:create-user';

    private $userManager;

    public function __construct(UserManager $userManager)
    {
        parent::__construct();
        $this->userManager = $userManager;
    }

    protected function configure()
    {
        $this
            ->setDescription('Create a client in the database. Requires email/login & password')
            ->addArgument('type', InputArgument::REQUIRED, 'client, conseiller or admin')
            // ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $type = $input->getArgument('type');

        if (!in_array($type, ['admin', 'conseiller', 'client']))
            die('type not known');

        $username = $io->ask('What is the user name?'); // TODO validate format
        $password = $io->askHidden('What is the user password?');
        if (!empty($username) && !empty($password)) {
            $this->createUser($io, $type, $username, $password);
        } else {
            $io->error("username & password must be non empty!");
        }

        return 0;
    }

    private function createUser($io, $type, $username, $password)
    {
        $io->note("Creating $type: $username");

        $user = $this->createEntity($type, $username, $password);
        if ($user != null) {
            $this->userManager->persistUser($user);
            $io->success('Client successfully inserted in database');
        } else {
            $io->error('Entity not created');
        }
    }

    private function createEntity($type, $username, $password)
    {
        switch ($type) {
            case "admin":
                return $this->userManager->createAdmin($username, $password);
        }
    }
}
