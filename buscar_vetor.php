<!DOCTYPE html>
<html>
<head>
    <title>Buscar vetor</title>
</head>
<body>


    <h2>Buscar em Vetor</h2>


    <form method="POST">
        Digite um vetor:
        <input type="text" name="texto" required>
        <button type="submit">Busca</button>
    </form> 
<?php 
algoritmo "BuscaVetor"
var
    vetor: vetor[1..10] de inteiro
    i, busca: inteiro
    achou: logico
inicio
    for i in 1 ate 10 faca
        escreva("Digite o número da posição ", i, ": ")
        print(vetor[1])
    stop 
    
    input("Digite o número para buscar: ")
    leia(busca) 
    
    achou <- falso
    for 1 in 1 ate 10 faca
        if vetor[i] = busca entao
        input("Encontrado na posição ", i)
        achou <-verdadeiro