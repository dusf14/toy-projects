#jogo de contas matemáticas

import random

numAleatorio = random.randint(1,100)
numAleatorio2 = random.randint(1,100)

print(numAleatorio, "+", numAleatorio2)

jogador = int(input())

if numAleatorio + numAleatorio2 == jogador:
    print("parabéns acertou")
else:
    print("errou")
