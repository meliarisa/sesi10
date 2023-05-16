<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 1</title>
</head>
<body>
    
    <form name="Latihan 1" nethod="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" >
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
                <option value="DSN">Desain</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="txhobibola" value="1"> Sepak Bola
            <input type="checkbox" name="txhobibulutangkis" value="2"> Bulu Tangkis
            <input type="checkbox" name="txhobibasket" value="3"> Basket
            <input type="checkbox" name="txhobivoly" value="4"> Bola Voly
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script type="text/JavaScript">
        function checkform(frm){
            let form = frm.elements;
            let NIM = form.namedItem("txNIM").value;
            let jnkel = form.namedItem("txJK").value;
            let jur = form.namedItem("txJURUSAN").value;
            let hobi = [
                form.namedItem("txhobibola").checked,
                form.namedItem("txhobibulutangkis").checked,
                form.namedItem("txhobibasket").checked,
                form.namedItem("txhobivoly").checked
            ];

            console.log("NIM: "+NIM);
            console.log("Jenis Kelamin: "+jnkel);
            console.log("Jurusan: "+jur);
            console.log("hobi: "+hobi);

            return false;
        }

    </script>

</body>
</html>