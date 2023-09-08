<?php 

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:matrix', 
    description: 'Display the Matrix message.',
    hidden: false,
    aliases: ['app:disp-matrix']
    )]
class MatrixCommand extends Command 
{
    // Deprecated since Symfony 6.1
    // protected static $defaultDescription = "Display the Matrix message.";

    protected function execute(InputInterface $input, OutputInterface $output): int
    {   
        $output->writeln('<info>=====================</>');
        $output->writeln('<info>Welcome to the Matrix</>');
        $output->writeln('<info>=====================</>');
        $output->writeln('');
        $output->writeln([
            '                    <info>##</>                ##',
            '                    <info>##</>',
            '##  ##    ####     <info>#####</>   ######    ###     <info>##  ##</>',
            '#######      ##     <info>##</>      ##  ##    ##      <info>####</>',
            '## # ##   #####     <info>##</>      ##        ##       <info>##</>',
            '##   ##  ##  ##     <info>## ##</>   ##        ##      <info>####</>',
            '##   ##   #####      <info>###</>   ####      ####    <info>##  ##</>'
        ]);

        return Command::SUCCESS;
    }
}