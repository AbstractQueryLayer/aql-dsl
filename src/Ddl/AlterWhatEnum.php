<?php

namespace IfCastle\AQL\Dsl\Ddl;

enum AlterWhatEnum: string
{
    case TABLE                      = 'TABLE';
    case COLUMN                     = 'COLUMN';
    case INDEX                      = 'INDEX';
    case KEY                        = 'KEY';
    case CONSTRAINT                 = 'CONSTRAINT';
    case PARTITION                  = 'PARTITION';
}
