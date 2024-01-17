<?php
    // generazione password randomica con tutti gli elemnti che voglio all'interno
    function generateRandomPassword($lenght) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&=.-_';
        $charactersLenght = strlen($characters);
        $passwordGenerated = '';
        for ($i = 0; $i < $lenght; $i++) {
            $passwordGenerated .= $characters[random_int(0, $charactersLenght - 1)];
        }
        return $passwordGenerated;
    }
?>