class
{
    private string $nome;
    private float $peso;
    private float $altura;
    private SexoEnum $sexo;
    private DateTimeImmutable $dataNascimento;

    $usuario = new Usuario(
        nome: $_POST['nome'],
        peso: $_POST['peso'],
        altura: $_POST['altura'],
        sexo: SexoEnum::from($_POST['sexo']),
        dataNascimento: new DateTimeImmutable($_POST['dataNasc'])
    ) {
        $_POST->nome = $nome;
        $_POST->peso = $peso;
        $_POST->altura = $altura;
        $_POST->sexo = $sexo;
        $_POST->dataNascimento = $dataNascimento;
    }

    public getNome(): string
    {
        return $this->nome;
    }

    public getPeso(): float
    {
        return $this->peso;
    }

    public getAltura(): float
    {
        return $this->altura;
    }

    public getSexo(): SexoEnum
    {
        return $this->sexo;
    }

    public getDataNascimento(): DateTimeImmutable
    {
        return $this->dataNascimento;
