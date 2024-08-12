<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <a href="{{url('dashboard')}}" </a>
    
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <nav>
            <ul>
                <li><a href="{{ route('person.index') }}">Personas</a></li>
                <li><a href="{{ route('bincome.index') }}">Presupuesto Ingresos</a></li>
                <li><a href="{{ route('bexpense.index') }}">Presupuesto Egresos</a></li>
                <li><a href="{{ route('income.index') }}">Transacciones de Ingresos</a></li>
                <li><a href="{{ route('expense.index') }}">Transacciones de Egresos</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>