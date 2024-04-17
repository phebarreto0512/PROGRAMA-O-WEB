
    public static function classificar(float $imc, string $sexo, int $idade): string
    {
        $percentis = match ($sexo) {
            'feminino' => self::getPercentisFeminino($idade),
            'masculino' => self::getPercentisMasculino($idade),
            default => throw new InvalidArgumentException('Sexo inválido fornecido'),
        };

        $baixoPesoLimite = $percentis[0];
        $pesoSaudavelLimiteMin = $percentis[0];
        $pesoSaudavelLimiteMax = $percentis[3];

        if ($imc < $baixoPesoLimite) {
            return self::BaixoPeso;
        } elseif ($imc >= $pesoSaudavelLimiteMin && $imc < $pesoSaudavelLimiteMax) {
            return self::PesoSaudavel;
        } else {
            return self::Sobrepeso;
        }
    }

    private static function getPercentisFeminino(int $idade): array
    {
        return match ($idade) {
            10 => [14.23,  23.20],
            11 => [14.60,  24.59],
            12 => [14.98,  25.95],
            13 => [15.36,  27.07],
            14 => [15.67,  27.97],
            15 => [16.01,  28.51],
            16 => [16.37,  29.10],
            17 => [16.59,  29.72],
            18 => [16.71,  30.22],
            19 => [16.87,  30.72],
  
        ];
    }

    private static function getPercentisMasculino(int $idade): array
    {
        return match ($idade) {
            10 => [14.42,  22.60],
            11 => [14.83,  23.70],
            12 => [15.24,  24.89],
            13 => [15.73,  25.93],
            14 => [16.18,  26.93],
            15 => [16.59,  27.75],
            16 => [16.98,  28.61],
            17 => [17.29,  29.49],
            18 => [17.50,  30.33],
            19 => [17.67,  31.07],
           
        ];
    }
}

class CalculadoraImc
{
    private $usuario;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }

    public function calcular()
    {
        $peso = $this->usuario->getPeso();
        $altura = $this->usuario->getAltura();
        return $peso / ($altura * $altura);
    }

    public function classificarIdade($idade, $sexo)
    {
        
        } elseif ($idade < 10) {
            return 'necessita ser acima de 10 anos'; se a idade for menor que 10, o código ira responder que precisa ser superior que 10 ANOS
        } else {
            if ($sexo == 'Feminino' && $idade == 10) { IDADE = OU MAIOR QUE 10 DO SEXO FEMENINO IRA CALCULAR O PESO
                if ($imc < 14.23) { SE O PESO FOR ENTRE 14.23 ESTA ABAIXO
                    return 'Baixo Peso';
                } elseif ($imc > 23.20) { SE O PESO FOR 23.20 ESA ACIMA DO PESO
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico'; OU CASO O PESO ESTEJA ENTRE AS MEDIDAS, O PESO ESTA ADEQUADO 
                }
            }
    
 
 } elseif ($idade < 11) {
            return 'necessita ser acima de 11 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 12) {
                if ($imc < 14.60) {
                    return 'Baixo Peso';
                } elseif ($imc > 24.59) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 12) {
            return 'necessita ser acima de 12 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 12) {
                if ($imc < 14.98) {
                    return 'Baixo Peso';
                } elseif ($imc > 25.95) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 13) {
            return 'necessita ser acima de 13 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 13) {
                if ($imc < 15.36) {
                    return 'Baixo Peso';
                } elseif ($imc > 27.07) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 14) {
            return 'necessita ser acima de 14 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 14) {
                if ($imc < 15.67) {
                    return 'Baixo Peso';
                } elseif ($imc > 27.97) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 15) {
            return 'necessita ser acima de 15 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 15
    ) {
                if ($imc < 16.01) {
                    return 'Baixo Peso';
                } elseif ($imc > 28.51) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 16) {
            return 'necessita ser acima de 16anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 16) {
                if ($imc < 16.37) {
                    return 'Baixo Peso';
                } elseif ($imc > 29.10) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
    
   } elseif ($idade < 17) {
            return 'necessita ser acima de 17 anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 17) {
                if ($imc < 16.59) {
                    return 'Baixo Peso';
                } elseif ($imc > 29.72) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
                    } 
                    elseif ($idade < 18) {
            return 'necessita ser acima de 18anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 18) {
                if ($imc < 16.71) {
                    return 'Baixo Peso';
                } elseif ($imc > 30,22) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
} elseif ($idade < 19) {
            return 'necessita ser acima de 19anos';
        } else {
            if ($sexo == 'Feminino' && $idade == 19) {
                if ($imc < 16.87) {
                    return 'Baixo Peso';
                } elseif ($imc > 30.72) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }


masculino 
} elseif ($idade < 10) {
            return 'necessita ser acima de 10 anos'; 
        } else {
            if ($sexo == 'masculino' && $idade == 10) { 
                if ($imc < 14.42) {
                    return 'Baixo Peso';
                } elseif ($imc > 22.60) { 
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico'; 
            }
    
} elseif ($idade < 11) {
            return 'necessita ser acima de 11 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 12) {
                if ($imc < 14.83) {
                    return 'Baixo Peso';
                } elseif ($imc > 23.70) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 12) {
            return 'necessita ser acima de 12 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 12) {
                if ($imc < 15.24) {
                    return 'Baixo Peso';
                } elseif ($imc > 24.89) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 13) {
            return 'necessita ser acima de 13 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 13) {
                if ($imc < 15.73) {
                    return 'Baixo Peso';
                } elseif ($imc > 25.93) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 14) {
            return 'necessita ser acima de 14 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 14) {
                if ($imc < 16.18) {
                    return 'Baixo Peso';
                } elseif ($imc > 26.93) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 15) {
            return 'necessita ser acima de 15 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 15
    ) {
                if ($imc < 16.59) {
                    return 'Baixo Peso';
                } elseif ($imc > 27.75) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
     } elseif ($idade < 16) {
            return 'necessita ser acima de 16anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 16) {
                if ($imc < 16.98) {
                    return 'Baixo Peso';
                } elseif ($imc > 28,61) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
            }
    
   } elseif ($idade < 17) {
            return 'necessita ser acima de 17 anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 17) {
                if ($imc < 17.29) {
                    return 'Baixo Peso';
                } elseif ($imc > 29.49) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
                    } 
                    elseif ($idade < 18) {
            return 'necessita ser acima de 18anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 18) {
                if ($imc < 17.50) {
                    return 'Baixo Peso';
                } elseif ($imc > 30,33) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
} elseif ($idade < 19) {
            return 'necessita ser acima de 19anos';
        } else {
            if ($sexo == 'Masculino' && $idade == 19) {
                if ($imc < 17.67) {
                    return 'Baixo Peso';
                } elseif ($imc > 31.07) {
                    return 'Sobrepeso';
                } else {
                    return 'Adequado ou Eutrófico';
                }
