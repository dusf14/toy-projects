# Guess The Number
import random
import os

os.system('cls' if os.name == 'nt' else 'clear')

print("Bem vindo ao jogo do guess the number")

numero=random.randint(1,10)
#controlo print(numero)

palpite = int(input("insira o palpite:"))
#print("o seu palpite é", palpite)

while numero != palpite:
    if numero < palpite:
        print(palpite, "é maior que o numero criado")
    elif numero > palpite:
        print(palpite,"é menor que o numero criado")
        
    palpite = int(input("Tente novamente: "))

print("Parabéns Acertou!!!")