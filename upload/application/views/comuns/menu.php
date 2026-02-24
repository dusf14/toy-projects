<ul class="nav menu-nav">
    <!--
		this->router->fetch_class() -> é responsavel por verificar se uma classe exite e CI
		this->router->fetch_method() -> é responsavel por verificar se um metodo na classe CI
		
		Sem configurar o base_url-> por padrao devolve o valor vazio ou default do servidor [::1]
		Devem definir .../config/config.php:
		$config['base_url'] = 'http://localhost/site1/app/';
	 -->
        <li class="<?=($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
            <a href="<?=base_url()?>">Home</a>
        </li>
		<li class="<?=($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
			<a href="<?= base_url('produtos') ?>">Post</a>
		</li>
        
</ul>