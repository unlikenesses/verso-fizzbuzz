<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\FizzBuzzGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzCommand extends Command
{
    private const int DEFAULT_START = 1;
    private const int DEFAULT_END = 100;
    private FizzBuzzGenerator $fizzBuzzGenerator;

    public function __construct()
    {
        $this->fizzBuzzGenerator = new FizzBuzzGenerator();

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('app:fizz-buzz')
            ->setDescription('Runs FizzBuzz')
            ->setHelp('This command allows you to run FizzBuzz, with optional start and end arguments.')
            ->addArgument('start', InputArgument::OPTIONAL, 'Start number', self::DEFAULT_START)
            ->addArgument('end', InputArgument::OPTIONAL, 'End number', self::DEFAULT_END);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $generator = $this->fizzBuzzGenerator->fizzBuzz((int) $input->getArgument('start'), (int) $input->getArgument('end'));

        foreach ($generator as $value) {
            $output->writeln((string) $value);
        }

        return Command::SUCCESS;
    }
}
