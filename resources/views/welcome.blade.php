<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Laravel</title>

    <style>

        body {
            background: url("{{ asset('Poke.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 40px;
            font-family: 'Segoe UI', sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 55px;
            font-weight: 900;
            margin-bottom: 40px;
            color: #2d3e50;
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        .list {
            width: 60%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .card {
            background: #ffffffd0;
            border-radius: 20px;
            padding: 30px;
            border: 2px solid #d6dbe3;
            transition: 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
            display: flex;
            align-items: center;
            gap: 25px;
            backdrop-filter: blur(6px);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        }

        .poke-id {
            font-size: 24px;
            font-weight: 900;
            color: #4d5c70;
        }

        .poke-name {
            font-size: 32px;
            font-weight: 900;
            color: #2d8cf0;
            text-transform: capitalize;
        }

        .data {
            display: flex;
            flex-direction: column;
            gap: 8px;
            color: #4a4a4a;
            font-size: 18px;
        }

        .type {
            background: #a8d0ff;
            padding: 5px 12px;
            border-radius: 8px;
            color: #1b3a57;
            font-weight: bold;
            display: inline-block;
            margin-right: 6px;
            font-size: 15px;
        }

        img {
            width: 120px;
            image-rendering: pixelated;
        }

    </style>
</head>
<body>

    <h1>POKEDEX</h1>

    <div class="list">
        @foreach ($pokemones as $pokemon)
            <div class="card">

                <img src="{{ $pokemon['sprite'] }}" alt="{{ $pokemon['name'] }}">

                <div>
                    <div class="poke-id">#{{ $pokemon['id'] }}</div>
                    <div class="poke-name">{{ $pokemon['name'] }}</div>

                    <div class="data">
                        <div><strong>Altura:</strong> {{ $pokemon['height'] }} dm</div>
                        <div><strong>Peso:</strong> {{ $pokemon['weight'] }} hg</div>

                        <div>
                            <strong>Tipo:</strong>
                            @foreach ($pokemon['types'] as $type)
                                <span class="type">{{ $type }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

</body>
</html>
