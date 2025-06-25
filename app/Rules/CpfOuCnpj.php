<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CpfOuCnpj implements Rule
{
    public function passes($attribute, $value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);

        if (strlen($value) === 11) {
            return $this->validaCpf($value);
        }

        if (strlen($value) === 14) {
            return $this->validaCnpj($value);
        }

        return false;
    }

    public function message()
    {
        return 'O campo :attribute deve conter um CPF ou CNPJ válido.';
    }

    private function validaCpf($cpf)
    {
        if (preg_match('/(\d)\1{10}/', $cpf)) return false;

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    private function validaCnpj($cnpj)
    {
        if (preg_match('/(\d)\1{13}/', $cnpj)) return false;

        $peso1 = [5,4,3,2,9,8,7,6,5,4,3,2];
        $peso2 = [6,5,4,3,2,9,8,7,6,5,4,3,2];

        for ($i = 0, $soma1 = 0; $i < 12; $i++) {
            $soma1 += $cnpj[$i] * $peso1[$i];
        }

        $digito1 = ($soma1 % 11 < 2) ? 0 : 11 - ($soma1 % 11);

        if ($cnpj[12] != $digito1) return false;

        for ($i = 0, $soma2 = 0; $i < 13; $i++) {
            $soma2 += $cnpj[$i] * $peso2[$i];
        }

        $digito2 = ($soma2 % 11 < 2) ? 0 : 11 - ($soma2 % 11);

        return $cnpj[13] == $digito2;
    }
}
