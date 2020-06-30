<?php

$hierarquia = array();
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//inicio: Diretor Comercial
			array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//Inicio Gerente de vendas
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
						//Termino: Gerente de vendas
					)
			),
			//Termino: Diretor Comercial
			//Inicio: Diretor financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas A Pagar',
						'subordinados'=>array(
							//Inicio: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
								)	
							//termino supervisor de pagamentos
							)
					),
					//Termino gerente de contas a pagar
					//Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo' => 'Funcionário'	
										)
									)
								)
								//Termino supervisor de Suprimentos
					)
	 			)
					//termino: Gerente de compras
			)
		)
		//Termino Diretor Financeiro
	)
	


);
//FUNÇÃO RECURSIVA
	function exibe($cargos){
		
		$html = '<ul>';

	foreach ($cargos as $cargo){

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];
		
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 )
		{
			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= "</ul>";
	return $html;
}
	echo exibe($hierarquia);

?>