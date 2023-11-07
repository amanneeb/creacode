

<!-- Si on est pas sur la première page et s'il y a plus d'une page -->
@if ($numeroPage > 0)
    <a class="hyperlien" href= "{{ $urlPagination . "&page=" . 0  ."#similaires"}}">Premier</a>
@else
    <span style="color:#999">Premier</span> <!-- Bouton premier inactif -->
@endif

&nbsp;|&nbsp;

@if ($numeroPage > 0)
    <a class="hyperlien" href="{{ $urlPagination . "&page=" . ($numeroPage - 1) ."#similaires"}}">Précédent</a>
@else
    <span style="color:#999">Précédent</span><!-- Bouton précédent inactif -->
@endif

&nbsp;|&nbsp;

<!-- Statut de progression: page 9 de 99 -->
{{"Page " . ($numeroPage + 1) . " de " . $nombreTotalPages}}

&nbsp;|&nbsp;

<!-- Si on est pas sur la dernière page et s'il y a plus d'une page -->
@if ($numeroPage+1 < $nombreTotalPages)
    <a class="hyperlien" href="{{ $urlPagination . "&page=" . ($numeroPage + 1)."#similaires"  }}">Suivant</a>
@else
    <span style="color:#999">Suivant</span><!-- Bouton suivant inactif -->
@endif

&nbsp;|&nbsp;

@if ($numeroPage+1 < $nombreTotalPages)
    <a class="hyperlien" href="{{ $urlPagination . "&page=" . $nombreTotalPages -1 ."#similaires"}}">Dernier</a>
@else
    <span style="color:#999">Dernier</span><!-- Bouton dernier inactif -->
@endif




