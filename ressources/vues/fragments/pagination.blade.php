

<!-- Si on est pas sur la première page et s'il y a plus d'une page -->
@if ($numeroPage > 0)
    <a href= "{{ $urlPagination . "&page=" . 0  }}">Premier</a>
@else
    <span>Premier</span> <!-- Bouton premier inactif -->
@endif

&nbsp;|&nbsp;

@if ($numeroPage > 0)
    <a href="{{ $urlPagination . "&page=" . ($numeroPage - 1) }}"><i class="fa-solid fa-circle-chevron-left fa-xl"></i></a>
@else
    <span><i class="fa-solid fa-circle-chevron-left fa-xl"></i></span><!-- Bouton précédent inactif -->
@endif

&nbsp;|&nbsp;

<!-- Statut de progression: page 9 de 99 -->
<span>{{"Page " . ($numeroPage + 1) . " de " . $nombreTotalPages}}</span>

&nbsp;|&nbsp;

<!-- Si on est pas sur la dernière page et s'il y a plus d'une page -->
@if ($numeroPage+1 < $nombreTotalPages)
    <a href="{{ $urlPagination . "&page=" . ($numeroPage + 1)  }}"><i class="fa-solid fa-circle-chevron-right fa-xl"></i></a>
@else
    <span><i class="fa-solid fa-circle-chevron-right fa-xl"></i></span><!-- Bouton suivant inactif -->
@endif

&nbsp;|&nbsp;

@if ($numeroPage+1 < $nombreTotalPages)
    <a href="{{ $urlPagination . "&page=" . $nombreTotalPages -1}}">Dernier</a>
@else
    <span>Dernier</span><!-- Bouton dernier inactif -->
@endif



