<h1>Aprendendo Laravel</h1>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="customers">Clientes</a></li>
    <li><a href="about">Sobre</a></li>
</ul>

<p>Clientes</p>

<ul>
    @foreach($customers as $customer)
        <li>{{ $customer }}</li>
    @endforeach
</ul>