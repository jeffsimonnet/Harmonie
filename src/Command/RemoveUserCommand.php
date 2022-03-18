<?php

namespace App\Command;

use App\Service\UserManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class RemoveUserCommand extends Command
{
    protected static $defaultName = 'app:remove-user';

    private $userManager;

    public function __construct(UserManager $userManager)
    {
        parent::__construct();
        $this->userManager = $userManager;
    }

    protected function configure()
    {
        $this
            ->setDescription('Remove a user from the database')
            ->addArgument('type', InputArgument::REQUIRED, 'client, conseiller or admin')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $type = $input->getArgument('type');

        if (!in_array($type, ['admin', 'conseiller', 'client']))
            die('type not known');

        $username = $io->ask('What is the user name?'); // TODO validate format
        if (!empty($username)) {
            $this->removeUser($io, $type, $username);
        } else {
            $io->error("username must be non empty!");
        }

        return 0;
    }

    private function removeUser($io, $type, $username)
    {
        $io->note("Creating $type: $username");

        $user = $this->getEntity($type, $username);
        if ($user != null) {
            $this->userManager->removeUser($user);
            $io->success('Client successfully removed from database');
        } else {
            $io->error('Entity not found');
        }
    }

    private function getEntity($type, $username)
    {
        switch ($type) {
            case "admin":
                return $this->userManager->getAdmin($username);
        }
    }
}
