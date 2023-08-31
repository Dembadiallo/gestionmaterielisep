<footer class="bg-dark text-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; {{ date('Y') }} Gestion des matériels. Tous droits réservés.</p>
            </div>
            <div class="col-md-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{ route('contact') }}">Nos Contact</a></li>
                    <li class="list-inline-item"><a href="{{ route('service') }}">Nos services</a></li>
                    <li class="list-inline-item"><a href="{{ route('materiels.index') }}">Retour</a></li>

                </ul>
            </div>
        </div>
</div>

</footer>
