CREATE TABLE CLIENTE (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    endereco VARCHAR(100),
    telefone VARCHAR(15)
);

CREATE TABLE PRODUTO (
    id INT PRIMARY KEY,
    nome VARCHAR(50),
    preco DECIMAL(10, 2),
    qtde INT
);

CREATE TABLE PEDIDO (
    id INT PRIMARY KEY,
    id_cliente INT,
    data_pedido DATE,
    FOREIGN KEY (id_cliente) REFERENCES CLIENTE(id)
);

CREATE TABLE ITEMPEDIDO (
    id INT PRIMARY KEY,
    id_pedido INT,
    id_produto INT,
    qtde INT,
    FOREIGN KEY (pedido_id) REFERENCES PEDIDO(id),
    FOREIGN KEY (produto_id) REFERENCES PRODUTO(id)
);
