$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#forModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {

        $('#forModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/prakweb_b_203040102/mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        

        $.ajax({
            url: 'http://localhost/prakweb_b_203040102/mvc/public/mahasiswa/getubah',
            data: {id : id},
            method : 'post',
            dataType : 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });

});