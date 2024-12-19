<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>pencarian wilayah</h1>
    <div class="container mt-5">
        <h2>Pilih Wilayah</h2>
        <form action="#" method="post" id="form_action">
            <div class="form-group">
                <label for="s-provinsi">Provinsi</label>
                <select name="provinsi" id="s-provinsi" class="form-control">
                    <option value="" select disabled hidden>pilih provinsi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="s-kota">Kota</label>
                <select name="kota" id="s-kota" class="form-control">
                    <option value="" select disabled hidden>pilih kota</option>
                </select>
            </div>

            <div class="form-group">
                <label for="s-kecamatan">Kecamatan</label>
                <select name="kecamatan" id="s-kecamatan" class="form-control">
                    <option value="" select disabled hidden>pilih kecamatan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="s-kelurahan">Kelurahan</label>
                <select name="kelurahan" id="s-kelurahan" class="form-control">
                    <option value="" select disabled hidden>pilih kelurahan</option>
                </select>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
       $( document ).ready(function(){

        get_data($('#s-provinsi'))

        function get_data(element, code = null){
            element.find('option').remove();
            element.removeAttr('disabled');

            name = element.attr('name')

            element.prepend('<option value=""select disabled hidden>pilih '+ name +' provinsi</option>')
            $.ajax({
                url: "http://localhost/PKL/tailwind/wilayah/get_wilayah.php",
                type: "POST",
                data: {
                    code: code,
                },
                success: function(data){
                    data.forEach(item => {
                        element.append('<option value=' + item.kode+'>' +item.nama+'</option>')
                    });
                },
                error: function() {
                    alert('error');
                }
            });
        }

        $('[id^="s-"]').change(function (){
            let id = $(this).attr('id')

            const name = $(this).attr('name')

            const data = {
                'provinsi':'#s-kota',
                'kota':'#s-kecamatan',
                'kecamatan':'#s-kelurahan'
            }
            let is_reset = false

            console.log([name, id])

            Object.keys(data).forEach(function(key) {

                if(key == name){
                    is_reset = true
                }

                if(is_reset == true){
                    $(data[key]).find('option').remove()
                    const childName = $(data[key]).attr('name')
                    $(data[key]).prepend('<option value=""select disabled hidden>pilih '+childName+'</option>')

                    const keys = Object.keys(data);
                    // const nextKey = keys.at(keys.indexOf(key) + 1);
                //    $(data[nextkey]).attr('disabled', 'disabled')
                }
                
                if(is_reset == true){
                    $(data[key]).find('option').remove()
                    const childName = $(data[key]).attr('name')
                    $(data[key]).prepend('<option value=""select disabled hidden>pilih '+childName+'</option>')

                    // const keys = Object.keys(data);
                    // const nextKey = keys.at(keys.indexOf(key) + 1);
                    // $(data[nextKey]).attr('disabled','disabled')
                }

            });
                
                if (data[name]){
                    element = $(data[name])
                    get_data(element, $(this).val())
                }
       });

    });
        
    </script>
</body>
</html>