# dado

#importar a lib. random
import random

print("Clique enter para girar o dado! ")

teclado = int(input())

for giros in range(teclado):
    dado = random.randint(1,6)
    print("o dado deu:",dado)

print("Girou o dado",teclado,"vezes.")


#dado estilo D&D (Dungeons and Dragons) 20 lados
#dndDice = random.randint(1,20)