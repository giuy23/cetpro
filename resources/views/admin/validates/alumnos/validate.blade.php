@section('js')
<script src="{{ asset('admin') }}/alerts/alert-error.js"></script>
<script>
    alertError('holaaa');
    document.addEventListener('DOMContentLoaded', function() {
        let btn = document.getElementById('btn-submit');
        let camposValidar = ['DNI', 'pais', 'lu_nacimi', 'ditri_nacimi', 'provi_nacimi', 'regi_nacimi',
            'tel_fijo', 'cel_propio', 'cel_emer'
        ];

        btn.addEventListener('click', (event) => {
            let regex = /^[A-Za-z\s]+$/;

            camposValidar.forEach(campo => {
                let valorCampo = document.getElementById(campo).value;

                if (campo === 'DNI' && valorCampo.length !== 8) {
                    alertError(`El ${campo} debe tener 8 dígitos`);
                    event.preventDefault();
                } else if ((campo === 'tel_fijo' || campo === 'cel_propio' || campo === 'cel_emer') && valorCampo.length !== 9) {
                    alertError(`El ${campo} debe tener 9 dígitos`);
                    event.preventDefault();
                } else if (!regex.test(valorCampo)) {
                    alertError(`El ${campo} debe contener solo letras y espacios.`);
                    event.preventDefault();
                }
            });
        });
    });
</script>

@endsection
