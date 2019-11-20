 <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                   Liste des convocations
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                @if($role)
                <a href="{{route('convocations.create')}}"><button class="btn btn-outline-success">Rédiger votre convocations</button></a>
                @endif
            </div>
        </div>
    </div>