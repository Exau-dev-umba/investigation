<x-admin>
    @section('title', 'Enregistrement enquête')
    <div class="card">
        <div class="card-header">
            <!--h3 class="card-title">Enregistrement d'enquête</h3-->
            <span class="text-orange fa-2x">*</span>
            <span>Champ obligatoire</span>
            <div class="card-tools"><a href="{{ route('admin.enquete.index') }}"
                    class="btn btn-sm bg-orange text-white">Back</a></div>
        </div>
        <div class="card-body">
            <form id="myForm" class="needs-validation"novalidate  action="{{ route('admin.enquete.store') }}" method="POST">
                @csrf
                <fieldset>
                    <!--legend>Source d'enquête</legend-->

                    <div class="form-check form-switch">
                        <input class="form-check-input anonyme" type="checkbox" role="switch"
                            id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Source anonyme</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input alerteur-interne" type="checkbox" role="switch"
                            id="specialCheckbox">
                        <label class="form-check-label" for="specialCheckbox">Source interne</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-none" id="cuid">
                            <div class="form-group">
                                <label for="cuidalerteur" class="form-label">CUID(Alerteur):</label>
                                <input type="text" id="cuidalerteur" class="form-control alerteur" name="cuidalerteur"
                                    value="{{ old('cuid') }}">
                                <x-error>cuidalerteur</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-alerteur">
                            <div class="form-group">
                                <label for="prenom" class="form-label">Prénom alerteur:</label>
                                <input type="text" class="form-control alerteur" name="prenomalerteur"
                                    value="{{ old('prenomalerteur') }}">
                                <x-error>prenomalerteur</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-alerteur">
                            <div class="form-group">
                                <label for="nom" class="form-label">Nom alerteur:<span class="text-orange">*</span></label>
                                <input type="text" class="form-control alerteur" name="nomalerteur" required
                                    value="{{ old('nomealerteur') }}">
                                <x-error>nomalerteur</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-alerteur">
                            <div class="form-group">
                                <label for="phone" class="form-label">Tél alerteur:<span class="text-orange">*</span></label>
                                <input type="tel" class="form-control alerteur" name="phonealerteur" value="{{ old('phonealerteur') }}" required>
                                <x-error>phonealerteur</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-alerteur">
                            <div class="form-group">
                                <label for="adresse" class="form-label">Adresse alerteur:<span
                                        class="text-orange">*</span></label>
                                <input type="text" class="form-control alerteur" name="adressealerteur" required>
                                <x-error>adressealerteur</x-error>
                            </div>
                        </div>

                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="datereception" class="form-label">Date de réception:<span
                                        class="text-orange">*</span></label>
                                <input type="date" class="form-control" name="datereception" required>
                                <x-error>datereception</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="datedemarrage" class="form-label">Date de démarrage:<span
                                        class="text-orange">*</span></label>
                                <input type="date" class="form-control" name="datedemarrage" required>
                                <x-error>datedemarrage</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="categorie" class="form-label">Categorie:<span
                                        class="text-orange">*</span></label>
                                <input type="text" class="form-control" name="categorie" required>
                                <x-error>categorie</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="entitees" class="form-label">Entités concernées:<span
                                        class="text-orange">*</span></label>
                                <input type="text" class="form-control" name="entitees" required>
                                <x-error>entitées  concernées</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="typedecas" class="form-label">Type de cas:<span
                                        class="text-orange">*</span></label>
                                <input type="text" class="form-control" name="typedecas" required>
                                <x-error>typedecas</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="status" class="form-label">Statut:*</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="" selected disabled>selectioné le statut</option>
                                    <option value="Ouverte">Ouverte</option>
                                    <option value="Encours">Encours</option>
                                    <option value="Close">Close</option>
                                </select>
                                <x-error>statut</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="priorite" class="form-label">Priorité:*</label>
                                <select name="priorite" id="priorite" class="form-control" required>
                                    <option value="" selected disabled>selectioné la Priorité</option>
                                    <option value="Elevé">Elevé</option>
                                    <option value="Moyen">Moyen</option>
                                    <option value="Faible">Faible</option>
                                </select>
                                <x-error>priorite</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="row">
                                <div class="form-group col-lg">
                                    <label for="">Cas répété</label>
                                    <div class="form-check form-check-block">
                                        <input type="radio" id="repetenon" class="form-check-input" name="repete" required>
                                        <label for="repetenon" class="form-check-label">Oui</label>
                                        <x-error>casrepete</x-error>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="repeteoui" class="form-check-input" name="repete" required>
                                        <label for="repeteoui" class="form-check-label">Non</label>
                                        <x-error>casrepete</x-error>
                                    </div>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="">Avéré</label>
                                    <div class="form-check form-check-block">
                                        <input type="radio" id="avereoui" class="form-check-input" name="avere" required>
                                        <label for="avereoui" class="form-check-label">Oui</label>
                                        <x-error>avere</x-error>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="repeteoui" class="form-check-input" name="avere" required>
                                        <label for="avereouinon" class="form-check-label">Non</label>
                                        <x-error>averenon</x-error>
                                    </div>
                                </div>

                            </div>
                        </div>
                         <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="libelle" class="form-label">Libellé:<span
                                        class="text-orange">*</span></label>
                                <input type="text" id="libele" class="form-control" name="libelle" required>
                                <x-error>libelle</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="montantinitfinance" class="form-label">Montant Init. Impact Fin.:<span
                                        class="text-orange">*</span></label>
                                <input type="number" id="montantinitfinance" class="form-control" name="montantinitfinance" required>
                                <x-error>montantinitfinance</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="montantreelfinance" class="form-label">Montant Réel Impact Fin.:<span
                                        class="text-orange">*</span></label>
                                <input type="number" id="montantreelfinance" class="form-control" name="montantreelfinance" required>
                                <x-error>montantreelfinance</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="montantrecouvre" class="form-label">Montant Recouvré:<span
                                        class="text-orange">*</span></label>
                                <input type="number" id="montantrecouvre" class="form-control" name="montantrecouvre" required>
                                <x-error>montantrecouvre</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="dateprevpubrapport" class="form-label">Date prev. de publication de rapport d'enquête:<span
                                        class="text-orange">*</span></label>
                                <input type="date" class="form-control" name="dateprevpubrapport" required>
                                <x-error>dateprevpubrapport</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="datefinalepubrapport" class="form-label">Date finale de publication de rapport d'enquête:<span
                                        class="text-orange">*</span></label>
                                <input type="date" class="form-control" name="datefinalepubrapport" required>
                                <x-error>datefinalepubrapport</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="datediffusion" class="form-label">Date du classement dossier (date de diffusion):<span
                                        class="text-orange">*</span></label>
                                <input type="date" class="form-control" name="datediffusion" required>
                                <x-error>datediffusion</x-error>
                            </div>
                        </div>
                        <div class="col-lg-6 bloc-input-enquete">
                            <div class="form-group">
                                <label for="commentaires" class="form-label">Commentaires:<span
                                        class="text-orange">*</span></label>
                                <textarea class="form-control" name="commentaires" id="" cols="30" ></textarea>
                                <x-error>commentaires</x-error>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="float-right">
                                <button class="btn bg-orange text-white" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </form>
        </div>
        </div-->

        @section('js')
        <script>
            document.getElementById('flexSwitchCheckChecked').addEventListener('change', function() {
                const isChecked = this.checked;
                const form = document.getElementById('myForm');
                const inputs = form.querySelectorAll('.alerteur');
                const inputs_interne = form.querySelectorAll('.alerteur-interne');
                const cuid = form.querySelectorAll('.cuid-alereur');
                inputs.forEach(input => {
                    input.disabled = isChecked;
                    if (isChecked) {
                        input.classList.add('disabled');
                    } else {
                        input.classList.remove('disabled');
                    }
                });
            });
            document.getElementById('specialCheckbox').addEventListener('change', function() {
                const isChecked = this.checked;
                const bloc_alert_inputs = document.querySelectorAll('.bloc-input-alerteur, .anonyme');
                const specialInput = document.getElementById('cuid');
                bloc_alert_inputs.forEach(input => {
                    input.disabled = isChecked;
                    if (isChecked) {
                        input.classList.add('d-none');
                    } else {
                        input.classList.remove('d-none');
                    }
                });
                if (isChecked) {
                    specialInput.classList.remove('d-none');
                } else {
                    specialInput.classList.add('d-none');
                }
            });
        </script>
        @endsection
</x-admin>
