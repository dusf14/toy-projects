# Jogo de Pedra Papel Tesoura

#imports
import random

# mensagem de Start
print("Bem vindo ao jogo de pedra papel tesoura!")
print("Escolha 1.Pedra, 2.Papel, 3.Tesoura")

pedra = "pedra"
papel = "papel"
tesoura = "tesoura"

print("vamos começar a jogar!")
jogador = input()
# array com as jogadas disponíveis
bot = random.choice([pedra, papel, tesoura])

print('resposta do bot:',bot)

if jogador == pedra and bot == pedra:
    print("Empatou. Ambos escolheram Pedra.")
elif jogador == pedra and bot == papel:
    print("Perdeu! o bot escolheu Papel.")
elif jogador == pedra and bot == tesoura:
    print("Ganhou! o bot escolheu Tesoura.")
else:
    if jogador == papel and bot == papel:
        print("Empatou. Ambos escolheram Papel.")
    elif jogador == papel and bot == tesoura:
        print("Perdeu! o oponente escolheu Tesoura.")
    elif jogador == papel and bot == pedra:
        print("Ganhou! o oponente escolheu Pedra.")
    else:
        if jogador == tesoura and bot == tesoura:
            print("Empatou. Ambos escolheram Tesoura.")
        elif jogador == tesoura and bot == pedra:
            print("Perdeu! o oponente escolheu Pedra.")
        elif jogador == tesoura and bot == papel:
            print("Ganhou! o oponente escolheu Papel.")
        else:
            print("ocorreu um erro. Tente novamente")