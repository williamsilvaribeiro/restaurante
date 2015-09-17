<?php

$config = array('morador' => array(array(
    'field' => 'nm_morador',
    'label' => 'Nome',
    'rules' => 'required|trim|xss_clean'
),
    array(
        'field' => 'endereco',
        'label' => 'Endereço',
        //'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'nr_apartamento',
        'label' => 'Apartamento',
        'rules' => 'required|trim|xss_clean'
    ),
    array(
        'field' => 'telResidencial',
        'label' => 'Regime de Casamento',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'rg',
        'label' => 'RG',
        //'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'nacionalidade',
        'label' => 'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'estadoCivil',
        'label' => 'Estado Civil',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'profissao',
        'label' => 'Profissão',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'profissaoConjugue',
        'label' => 'Profissão',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'complend',
        'label' => 'Complemento endereço',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'telefone',
        'label' => 'Telefone',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'celular',
        'label' => 'Celular',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'nomeConjugue',
        'label' => 'Cônjugue',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'nacionalidadeConjugue',
        'label' => 'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'rgConjugue',
        'label' => 'RG',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'emissorConjugue',
        'label' => 'Orgão Emissor',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'cpfConjugue',
        'label' => 'CPF',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'endereco',
        'label' => 'Endereço',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'emissor',
        'label' => 'Orgão Emissor RG',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'cnh',
        'label' => 'CNH',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'emissorcnh',
        'label' => 'Orgão Emissor CNH',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
//                                    'rules'=>'required|trim|valid_email|xss_clean'
    ),
    array(
        'field' => 'bairro',
        'label' => 'Bairro',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'cidade',
        'label' => 'Cidade',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'estado',
        'label' => 'Estado',
//                                    'rules'=>'required|trim|xss_clean'
    ),
    array(
        'field' => 'cep',
        'label' => 'CEP',
//                                    'rules'=>'required|trim|xss_clean'
    ))
,
    'noticias' => array(array(
        'field' => 'titulo_not',
        'label' => 'Titulo Noticia',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'imagemNoticia',
            'label' => '',
            'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'Data',
            'label' => 'dataNoticia',
//                                    'rules'=>'required|trim|xss_clean'
        ))
,
    'produtos' => array(array(
        'field' => 'descricao',
        'label' => 'Descrição',
        'rules' => 'required|trim|xss_clean'
    ))
,
    'funcionario' => array(array(
        'field' => 'nomeFuncionario',
        'label' => 'Nome',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'rg',
            'label' => 'RG',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'cep',
            'label' => 'CEP',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'nacionalidade',
            'label' => 'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'estadoCivil',
            'label' => 'Estado Civil',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'emissorRg',
            'label' => 'Orgão Emissor RG',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'endereco',
            'label' => 'Endereço',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'cpf',
            'label' => 'CPF',
//                                    'rules'=>'required|trim|xss_clean|is_unique[usuarios.cpf]'
        ),
        array(
            'field' => 'rua',
            'label' => 'Rua',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'numero',
            'label' => 'Numero',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'bairro',
            'label' => 'Bairro',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'cidade',
            'label' => 'Cidade',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'estado',
            'label' => 'Estado',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
//                                    'rules'=>'required|trim|valid_email|xss_clean'
        ),
        array(
            'field' => 'senha',
            'label' => 'Senha',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'telefone',
            'label' => 'Telefone',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'situacao',
            'label' => 'Situacao',
//                                    'rules'=>'required|trim|xss_clean'
        ))
,
    'mudanca' => array(array(
        'field' => 'dataMudanca',
        'label' => 'Data da Mudança',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'morador_id',
            'label' => 'morador',
            //'rules' => 'trim|xss_clean'
        ))
,
    'atestadoMedico' => array(array(
        'field' => 'dataEntrega',
        'label' => 'Data da Entrega',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'morador_id',
            'label' => 'morador',
            //'rules' => 'trim|xss_clean'
        ))
,
    'reserva' => array(array(
        'field' => 'dataReserva',
        'label' => 'Data da Reserva',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'morador_id',
            'label' => 'morador',
            //'rules' => 'trim|xss_clean'
        ))
,
    'notificacao' => array(array(
        'field' => 'dataNotificacao',
        'label' => 'Data da Notificação',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'morador_id',
            'label' => 'morador',
            'rules' => 'trim|xss_clean'
        ))
,
    'advertencia' => array(array(
        'field' => 'dataAdvertencia',
        'label' => 'Data',
        'rules' => 'trim|xss_clean'
    ),
        array(
            'field' => 'categoria',
            'label' => 'Categoria',
            'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'descricao',
            'label' => 'Descrição',
            'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'moradoradvertido_id',
            'label' => 'Morador',
            'rules' => 'trim|xss_clean'
        ))
,
    'multa' => array(array(
        'field' => 'dataMulta',
        'label' => 'Data da Multa',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'moradormultado_id',
            'label' => 'moradormultado',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'patrimonio' => array(array(
        'field' => 'dataAquisicao',
        'label' => 'Data da Aquisicao',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'fornecedor_id',
            'label' => 'fornecedor',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'fornecedor' => array(array(
        'field' => 'cpnjFornecedor',
        'label' => 'CNPJ',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'razaoSocial',
            'label' => 'razao Social',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'corpoDiretivo' => array(array(
        'field' => 'dtInicioMandato',
        'label' => 'Datas',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'cargo',
            'label' => 'Cargo',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'prestadorservico' => array(array(
        'field' => 'nome',
        'label' => 'Nome',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'cargo',
            'label' => 'Cargo',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'reuniao' => array(array(
        'field' => 'temaReuniao',
        'label' => 'Tema',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'cargo',
            'label' => 'Cargo',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'ocorrencia' => array(array(
        'field' => 'ocorrencia',
        'label' => 'Ocorrencia',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'cargo',
            'label' => 'Cargo',
//                                    'rules' => 'trim|xss_clean'
        ))
,
    'tiposUsuario' => array(array(
        'field' => 'nomeTipo',
        'label' => 'NomeTipo',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'situacao',
            'label' => 'Situacao',
            'rules' => 'required|trim|xss_clean'
        ))
,
    'receita' => array(array(
        'field' => 'descricao',
        'label' => 'Descrição',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'valor',
            'label' => 'Valor',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'vencimento',
            'label' => 'Data Vencimento',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'cliente_fornecedor',
            'label' => 'Cliente',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'tipo',
            'label' => 'Tipo',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'categoria',
            'label' => 'Categoria',
            //'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'baixado',
            'label' => 'Pago',
            //'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'repetir',
            'label' => 'repetir',
//                                    'rules'=>'required|trim|xss_clean'
        ))
,
    'despesa' => array(array(
        'field' => 'descricao',
        'label' => 'Descrição',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'valor',
            'label' => 'Valor',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'vencimento',
            'label' => 'Data Vencimento',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'cliente_fornecedor',
            'label' => 'Fornecedor',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'baixado',
            'label' => 'Pago',
            //'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'tipo',
            'label' => 'Tipo',
            'rules' => 'required|trim|xss_clean'
        ))
,
    'vendas' => array(
        array(
            'field' => 'dataVenda',
            'label' => 'Data da Venda',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'fgts',
            'label' => 'FGTS',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'entrada',
            'label' => 'Valor de Entrada',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'clientes_id',
            'label' => 'comprador',
            // 'rules'=>'trim|xss_clean|required'
        ),
        array(
            'field' => 'vendedor_id',
            'label' => 'vendedor',
//                                    'rules'=>'trim|xss_clean|required'
        ),
        array(
            'field' => 'usuarios_id',
            'label' => 'corretor',
            //'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'item_id',
            'label' => 'imoveis',
            //'rules' => 'trim|xss_clean'
        ))
,
    'classificados' => array(
        array(
            'field' => 'dt_clas',
            'label' => 'Data',
//            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'produto',
            'label' => 'produto',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'nm_clas',
            'label' => 'Titulo',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'descricao',
            'label' => 'Descrição',
            'rules' => 'trim|xss_clean'
        )
    ),
    'imoveis' => array(array(
        'field' => 'TIPOIMOVEL',
        'label' => 'Tipo Imóvel',
        'rules' => 'trim|xss_clean|required'
    ),
        array(
            'field' => 'STATUSIMOVEL',
            'label' => 'Status Imóvel',
            'rules' => 'trim|xss_clean'
        ))
,
    array(
        'field' => 'ENDERECOIMOVEL',
        'label' => 'Endereco',
        'rules' => 'trim|xss_clean'
    )
,
    array(
        'field' => 'COMPENDIMOVEL',
        'label' => 'Complemento',
        'rules' => 'trim|xss_clean|required'
    )
,
    array(
        'field' => 'CIDADEIMOVEL',
        'label' => 'Cidade',
        'rules' => 'trim|xss_clean'
    )
,
    array(
        'field' => 'UFIMOVEL',
        'label' => 'Uf',
        'rules' => 'trim|xss_clean'
    )
,
    array(
        'field' => 'CEPIMOVEL',
        'label' => 'Cep',
        'rules' => 'trim|xss_clean|required'
    )
,
    array(
        'field' => 'DESCRICAOIMOVEL',
        'label' => 'Descricao',
        'rules' => 'trim|xss_clean'
    )
,
    array(
        'field' => 'NATUREZAIMOVEL',
        'label' => 'Natureza',
        'rules' => 'trim|xss_clean'
    )
,
    array(
        'field' => 'INTERESSEIMOVEL',
        'label' => 'Interesse',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'SITUACAOIMOVEL',
        'label' => 'Situação',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'PRECOVENDAIMOVEL',
        'label' => 'Preço venda',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'PRECOLOCACAOIMOVEL',
        'label' => 'Preço alugel',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'AREAUTILIMOVEL',
        'label' => 'Area util',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'AREACONSTIMOVEL',
        'label' => 'Area Construida',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'QTDEDORMITORIOIMOVEL',
        'label' => 'Dormitorios',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'VALORCONDIMOVEL',
        'label' => 'Valor condominio',
        'rules' => 'trim|xss_clean'
    ),
    array(
        'field' => 'VAGASGARIMOVEL',
        'label' => 'Vagas na garagem',
        'rules' => 'trim|xss_clean'
    ),
    'agenda' => array(array(
        'field' => 'dataAgenda',
        'label' => 'Data da compromisso',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'nomeClienteAgenda',
            'label' => 'clientes',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'interesseCliente',
            'label' => 'interesseCliente',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'statusAgenda',
            'label' => 'statusAgenda',
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'usuarios_id',
            'label' => 'corretor',
            //'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'telefoneCliente',
            'label' => 'telefoneCliente',
            'rules' => 'trim|xss_clean|required'
        )
    ),
    'usuarios' => array(array(
        'field' => 'nome',
        'label' => 'Nome',
        'rules' => 'required|trim|xss_clean'
    ),
        array(
            'field' => 'rg',
            'label' => 'RG',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'sobreNomeUsuario',
            'label' => 'Sobre Nome',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'cep',
            'label' => 'CEP',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'nacionalidade',
            'label' => 'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'estadoCivil',
            'label' => 'Estado Civil',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'emissorRg',
            'label' => 'Orgão Emissor RG',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'endereco',
            'label' => 'Endereço',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'cpf',
            'label' => 'CPF',
            'rules' => 'required|trim|xss_clean|is_unique[usuarios.cpf]'
        ),
        array(
            'field' => 'rua',
            'label' => 'Rua',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'numero',
            'label' => 'Numero',
//                                    'rules'=>'required|trim|xss_clean'
        ),
        array(
            'field' => 'bairro',
            'label' => 'Bairro',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'cidade',
            'label' => 'Cidade',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'estado',
            'label' => 'Estado',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|xss_clean'
        ),
        array(
            'field' => 'senha',
            'label' => 'Senha',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'telefone',
            'label' => 'Telefone',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'situacao',
            'label' => 'Situacao',
            'rules' => 'required|trim|xss_clean'
        ))
,
    'negociacao' => array(
        array(
            'field' => 'dataNego',
            'label' => 'Data da negocição',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'fgts',
            'label' => 'FGTS',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'comprador',
            'label' => 'Comprador',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'etapa',
            'label' => 'Etapa',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'entrada',
            'label' => 'Valor de Entrada',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'clientes_id',
            'label' => 'comprador',
            // 'rules'=>'trim|xss_clean|required'
        ),
        array(
            'field' => 'vendedor_id',
            'label' => 'vendedor',
//                                    'rules'=>'trim|xss_clean|required'
        ),
        array(
            'field' => 'usuarios_id',
            'label' => 'corretor',
            //'rules' => 'trim|xss_clean'
        ),
        array(
            'field' => 'CODIMOVEL',
            'label' => 'imoveis',
            //'rules' => 'trim|xss_clean'
        ))
);
