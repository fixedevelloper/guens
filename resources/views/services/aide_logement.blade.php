@extends('base')
@section('title')Aide au Logement : Trouvez les Meilleures Subventions et Assistances Disponibles @endsection
@section('description')Découvrez les options d'aide au logement au Congo. Obtenez des informations sur les subventions,
les programmes d'assistance et les ressources disponibles pour vous aider à trouver et financer votre logement @endsection
@section('keywords')Aide au Logement,
Subventions pour Logement,
Assistance au Logement,
Aide Financière pour Logement,
Programmes d'Aide au Logement,
Aide au Logement Social,
Aide au Logement pour Étudiants,
Aide au Logement pour Familles,
Aide au Logement d'Urgence,
Aide au Logement pour Personnes à Faibles Revenus,
Aide au Logement Locatif,
Soutien au Logement,
Aide au Logement Subventionnée,
Assistance au Logement pour Personnes Âgées,
Aide au Logement Gouvernementale,
@endsection
@section('content')
@include('services._banner',['title'=>trans('site.service.aide_au_logement')])
<section class="courses-details-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="courses-details__item-left">
                    <div class="image mb-40">
                        <img src="{!! asset('assets/images/site/aide_logement.png') !!}" alt="image">
                    </div>
                    <a href="#0" class="tag">{!! __('site.service.aide_au_logement') !!}</a>
                    <h3 class="fs-30 mt-20 mb-20">{!! __('site.service.aide_au_logement') !!}</h3>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="blog-details__item-right">
                    <div class="item category mb-4">
                        <h3>{!! __('site.service.service') !!}</h3>
                        <ul>
                            <li>
                                <a href="{!! route('orientation_academique') !!}">{!! __('site.service.orientation_cademique') !!}</a>
                            </li>
                            <li>
                                <a href="{!! route('coaching') !!}">{!! __('site.service.coaching') !!}</a>
                            </li>
                            <li>
                                <a href="{!! route('procedure_consulaire') !!}">{!! __('site.service.procedure_consulaire') !!}</a>
                            </li>
                            <li class="active">
                                <a href="{!! route('assurance') !!}">{!! __('site.service.assurance') !!}</a>
                            </li>
                            <li>
                                <a href="{!! route('reservation_billet') !!}">{!! __('site.service.reservation_billet_avion') !!}</a>
                            </li>
                            <li>
                                <a href="{!! route('aide_logement') !!}">{!! __('site.service.aide_au_logement') !!}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="courses-details__item-left">
                    <div class="content mt-30 mb-30">
                        <h3 class="fs-30 mb-20">Descriptions</h3>
                        <p class="mb-20">{!! __('site.service.description.aide_au_logement') !!}.</p>
                        <p>Notre service d'aide au logement est dédié à vous accompagner dans toutes les étapes de la recherche, de la location ou de l'achat de votre futur logement. Que vous soyez à la recherche d'une nouvelle maison, d'un appartement, ou d'une solution de logement temporaire,
                            nous vous offrons un soutien personnalisé pour trouver la solution qui répond parfaitement à vos besoins.</p>
                    </div>
                    <div class="content">
                        <h3 class="fs-30 mb-20">Caractéristiques de Notre Service :</h3>
                        <p>.</p>
                        <ul class="mt-30">
                            <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                Assistance à la Recherche de Logement : Aide dans la recherche de propriétés disponibles selon vos critères, qu'il s'agisse d'acheter ou de louer un logement.
                            </li>
                            <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                Évaluation des Options : Analyse des différentes options de logement pour vous aider à choisir celle qui correspond le mieux à votre budget, vos préférences et vos besoins spécifiques.
                            </li>
                            <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                Accompagnement dans les Démarches Administratives : Assistance avec les formalités administratives, y compris la rédaction de baux, la vérification des contrats, et la demande de subventions ou aides au logement.
                            </li>
                            <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                Conseils Financiers : Fourniture de conseils sur les aspects financiers du logement, tels que le budget, les aides disponibles, et les options de financement.
                            </li>
                            <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                Gestion des Relations Locatives : Support dans la communication avec les propriétaires ou les agences, et résolution de tout problème lié au logement.
                            </li>
                        </ul>
                        <h3 class="fs-30 mb-20 mt-25">Pourquoi Choisir Notre Service d'Aide au Logement ?</h3>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <img width="305" src="{!! asset('assets/images/site/aide_logement.png') !!}" alt="image">
                            </div>
                            <div class="col-md-8">
                                <ul class="mt-30">
                                    <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                        Expertise et Connaissance du Marché : Bénéficiez de l’expertise de professionnels expérimentés qui connaissent bien le marché immobilier local et les solutions de logement.
                                    <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                        Support Personnalisé : Recevez un accompagnement sur mesure adapté à vos besoins individuels, que vous recherchiez un logement temporaire ou permanent.
                                    <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>

                                        Gain de Temps et d’Energie : Simplifiez votre recherche et vos démarches administratives grâce à notre assistance, vous permettant de vous concentrer sur d’autres aspects importants.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content mt-30 mb-30">
                        <p>
                            Avec notre service d'aide au logement, vous pouvez aborder votre projet de logement en toute sérénité, en étant sûr d'obtenir le soutien nécessaire pour faire le meilleur choix. <strong>Contactez-nous dès aujourd'hui pour découvrir comment nous pouvons vous aider à trouver le logement idéal</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
