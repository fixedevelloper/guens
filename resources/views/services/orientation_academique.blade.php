@extends('base')
@section('title')Orientation Académique - Services de Conseil pour Choisir le Meilleur Parcours Scolaire @endsection
@section('description')Découvrez nos services d'orientation académique pour aider les étudiants à choisir leur parcours scolaire et professionnel.
Accompagnement personnalisé et conseils experts pour un avenir réussi.@endsection
@section('keywords')
    Aide pour orientation académique,Comment choisir une orientation académique,Conseils pour orientation académique,Orientation Académique,Conseil en Orientation Académique,Services d'Orientation Académique,Accompagnement Orientation Académique,Guidance Académique
@endsection
@section('content')
    @include('services._banner',['title'=>trans('site.service.orientation_cademique_seo.tiltle')])
    <section class="courses-details-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="courses-details__item-left">
                        <div class="image mb-40">
                            <img title="Orientation Académique - Services de Conseil pour Choisir le Meilleur Parcours Scolaire"
                                 src="{!! asset('assets/images/site/orientation.png') !!}" alt="Session de conseil en orientation académique pour étudiants.">
                        </div>
                        <a href="#0" class="tag">{!! __('site.service.orientation_cademique_seo.tiltle') !!}</a>
                        <h3 class="fs-30 mt-20 mb-20">{!! __('site.service.orientation_cademique_seo.h3') !!}</h3>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="blog-details__item-right">
                        <div class="item category mb-4">
                            <h3>{!! __('site.service.service') !!}</h3>
                            <ul>
                                <li>
                                    <a href="{!! route('orientation_academique') !!}">{!! __('site.service.orientation_cademique_seo.tiltle') !!}</a>
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
                            <p class="mb-20">{!! __('site.service.description.orientation_cademique') !!}.</p>
                            <p>Notre service d'orientation académique offre un accompagnement personnalisé pour aider les étudiants et les jeunes professionnels à choisir le parcours éducatif et professionnel qui leur correspond le mieux. Nous fournissons des conseils experts et des ressources
                                adaptées pour guider chaque individu dans ses décisions académiques et professionnelles.</p>
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
                                    Évaluation Personnalisée : Analyse approfondie des compétences, intérêts et objectifs pour recommander les meilleures options de parcours académique et professionnel.

                                </li>
                                <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                    Conseils et Recommandations : Orientation sur les programmes d'études, les écoles, les universités et les carrières adaptées à chaque profil.
                                </li>
                                <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                    Soutien à la Décision : Assistance dans la prise de décision concernant les choix d'orientation, les admissions et les candidatures.
                                </li>
                                <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                    Ateliers et Séminaires : Sessions informatives sur les tendances académiques, les opportunités de financement, et les stratégies de réussite.
                                </li>
                                <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                    Suivi et Support Continu : Accompagnement tout au long du processus d'orientation pour assurer une transition fluide et réussie.
                                </li>
                            </ul>
                            <h3 class="fs-30 mb-20 mt-25">Pourquoi Choisir Notre Service ?</h3>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <img src="{!! asset('assets/images/site/370x220_Orientation.png') !!}" alt="image">
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
                                            Expertise et Expérience : Profitez de l’expertise de conseillers qualifiés avec une vaste expérience dans l’orientation académique et professionnelle
                                        </li>
                                        <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                            Approche Personnalisée : Recevez des conseils adaptés à vos besoins spécifiques et à vos aspirations individuelles.   </li>
                                        <li>
                                        <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                   xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z"
                                                    fill="#181818" />
                                            </svg></span>
                                            Ressources Complètes : Accédez à une gamme complète de ressources et d'outils pour faciliter vos choix et vos démarches. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content mt-30 mb-30">
                            <p>
                                Que vous soyez étudiant, parent, ou professionnel en reconversion, notre service d'orientation académique est là pour vous guider vers un avenir éducatif et professionnel épanouissant. Contactez-nous dès aujourd’hui pour planifier une consultation et commencer votre parcours vers le succès.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes._trial')
@endsection
