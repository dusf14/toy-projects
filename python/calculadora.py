# calculadora em python

#mensagem de start
print("Bem vindo á calculadora.py")

# "menu" de seleção de operação
print("1. Soma")
print("2. Subtração")
print("3. Multiplicação")
print("4. Divisão")
selecao = input("insira o valor da operação que deseja realizar: ")

if selecao == "1":
    print("Soma (1)")
    #soma
    opSoma1 = int(input("Valor1:"))
    opSoma2 = int(input("Valor2:"))
    resultadoSoma = opSoma1 + opSoma2
    print("O resultado da Soma é:",resultadoSoma)
    
elif selecao == "2":
    print("Subtração (2)")
    #subtração
    opSub1 = int(input("Valor1:"))
    opSub2 = int(input("Valor2:"))
    resultadoSub = opSub1 - opSub2
    print("O resultado da Subtração é:",resultadoSub)
    
elif selecao == "3":
    print("Multiplicação (3)")
    #multiplicação
    opMul1 = int(input("Valor1:"))
    opMul2 = int(print("Valor2:"))
    resultadoMul = opMul1 * opMul2
    print("O resultado da Multiplicação é:",resultadoMul)
    
elif selecao == "4":
    print("Divisão (4)")
    #divisão
    opDiv1 = int(input("Valor1:"))
    opDiv2 = int(input("Valor2:"))
    resultadoDiv = opDiv1 / opDiv2
    print("O resultado da Divisão é:",resultadoDiv)

else:
    print("Por favor insira um valor válido. 1, 2, 3 ou 4.")



