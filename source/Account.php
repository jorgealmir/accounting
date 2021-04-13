<?php

namespace Jamartins\Accounting;

/**
 * Description of Account
 *
 * @author Jorge
 */
class Account
{
    private $numberEntry;
    
    private $error;
    
    private $account = [
        [
            "code" => "1",
            "placing" => "1",
            "degree" => "1",
            "description" => "ATIVO"
        ],
        [
            "code" => "2",
            "placing" => "2",
            "degree" => "1",
            "description" => "PASSIVO E PATRIMÔNIO LÍQUIDO"
        ],
        [
            "code" => "3",
            "placing" => "3",
            "degree" => "1",
            "description" => "RECEITAS"
        ],
        [
            "code" => "4",
            "placing" => "4",
            "degree" => "1",
            "description" => "CUSTOS E DESPESAS"
        ],
        [
            "code" => "5",
            "placing" => "1.1",
            "degree" => "2",
            "description" => "ATIVO CIRCULANTE"
        ],
        [
            "code" => "6",
            "placing" => "1.1.01",
            "degree" => "3",
            "description" => "Caixa e Equivalentes"
        ],
        [
            "code" => "7",
            "placing" => "1.1.01.01",
            "degree" => "4",
            "description" => "Caixa"
        ],
        [
            "code" => "8",
            "placing" => "1.1.01.02",
            "degree" => "4",
            "description" => "Bancos"
        ],
        [
            "code" => "9",
            "placing" => "1.1.01.03",
            "degree" => "4",
            "description" => "Poupança ou Aplicações Financeiras"
        ]
    ];
    
    public function getChartOfAccounts():array
    {
        return $this->account;
    }
    
    public function getAccount(int $number): array
    {
        $idx = $number - 1;
        
        return [
            "code" => $this->account[$idx]['code'],
            "placing" => $this->account[$idx]['placing'],
            "degree" => $this->account[$idx]['degree'],
            "description" => $this->account[$idx]['description']
        ];
    }
    
}
