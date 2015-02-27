<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => "L'attribut :attribute doit être accepté.",
    "active_url"           => "L'attribut :attribute n'est pas une URL valide.",
    "after"                => "L'attribut :attribute doit être une date après :date.",
    "alpha"                => "L'attribut :attribute doit seulement contenir des lettres.",
    "alpha_dash"           => "L'attribut :attribute doit contenir seulement des lettres, des chiffres, et des underscores.",
    "alpha_num"            => "L'attribut :attribute doit contenir seulement des lettres et des chiffres.",
    "array"                => "L'attribut :attribute doit être un tableau.",
    "before"               => "L'attribut :attribute doit être une date avant :date",
    "between"              => array(
        "numeric" => "L'attribut :attribute doit être compris entre :min et :max",
        "file"    => "The :attribute must be between :min and :max kilobytes.", "L'attribut :attribute doit avoir une taille compris entre :min et :max kilobytes.",
        "string"  => "The :attribute must be between :min and :max characters.", "L'attribut :attribute doit faire entre :min et :max caractères.",
        "array"   => "The :attribute must have between :min and :max items.", "L'attribut :attribute doit avoir entre :min et :max éléments."
    ),
    "boolean"              => "L'attribut :attribute doit être true ou false.",
    "confirmed"            => "La confirmation de l'attribut :attribute ne correspond pas.",
    "date"                 => "L'attribut :attribute n'est pas une date valide.",
    "date_format"          => "L'attribut :attribute ne correspond pas au format :format.",
    "different"            => "Les attributs :attribute et :other doivent être différents.",
    "digits"               => "L'attribut :attribute doit avoir :digits nombres.",
    "digits_between"       => "L'attribut :attribute doit avoir entre :min et :max nombres.",
    "email"                => "L'attribut :attribute doit être une adresse mail valide.",
    "exists"               => "L'attribut :attribute sélectionné est invalide.",
    "image"                => "L'attribut :attribute doit être une image.",
    "in"                   => "L'attribut :attribute sélectionné est invalide.",
    "integer"              => "L'attribut :attribute doit être un entier.",
    "ip"                   => "L'attribut :attribute doit être une adresse IP valide.",
    "max"                  => array(
        "numeric" => "The :attribute may not be greater than :max.", "L'attribut :attribute ne doit pas être plus grand que :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.", "L'attribut :attribute ne peut faire plus de :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.", "L'attribut :attribute ne peut faire plus de :max caractères.",
        "array"   => "The :attribute may not have more than :max items.", "L'attribut :attribute ne peut contenir plus de :max éléments.",
    ),
    "mimes"                => "The :attribute must be a file of type: :values.", "L'attribut :attribute doit être de type :values.",
    "min"                  => array(
        "numeric" => "The :attribute must be at least :min.", "L'attribut :attribute doit être au moins :min.",
        "file"    => "The :attribute must be at least :min kilobytes.", "L'attribut :attribute doit faire au moins :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.", "L'attribut :attribute doit faire au moins :min caractères.",
        "array"   => "The :attribute must have at least :min items.", "L'attribut :attribute doit contenir au moins :min éléments.",
    ),
    "not_in"               => "L'attribut :attribute sélectionné est invalide.",
    "numeric"              => "L'attribut :attribute doit être un nombre.",
    "regex"                => "Le format de l'attribut :attribute est invalide.",
    "required"             => "L'attribut :attribute est requis.",
    "required_if"          => "L'attribut :attribute est requis si :other vaut :value.",
    "required_with"        => "L'attribut :attribute est requis si :values est présent.",
    "required_with_all"    => "L'attribut :attribute est requis si :values est présent.",
    "required_without"     => "L'attribut :attribute est requis si :values n'est pas présent.",
    "required_without_all" => "L'attribut :attribute est requis si :values ne sont pas présents.",
    "same"                 => "Les attributs :attribute et :other doivent correspondre.",
    "size"                 => array(
        "numeric" => "L'attribut :attribute doit faire :size.",
        "file"    => "L'attribut :attribute doit faire :size kilobytes.",
        "string"  => "L'attribut :attribute doit faire :size caractères.",
        "array"   => "L'attribut :attribute doit contenir :size éléments.",
    ),
    "unique"               => "L'attribut :attribute est déjà utilisé.",
    "url"                  => "Le format de l'attribut :attribute est invalid.",
    "timezone"             => "L'attribut :attribute doit être une zone valide.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
