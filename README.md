# phpForDruid
some codes for an internship test


1. Lequel des éléments suivants n'est pas un filtre défini « Hook » dans WordPress?

apply_filters_ref_array()


2. Laquelle des fonctions suivantes est utilisée pour ajouter CSS et jQuery sur un
plugin?

wp_register_style/wp_register_script


3. Quelle serait la sortie du code suiva

● Affiche le contenu du post


4. Comment pouvons-nous vérifier les paramètres d'entrées avant de les ajouter à une
requête dans le contrôleur?

if (Input::get('search')) {$queryString =
Input::get('search');􀀀$builder->where('name', 'LIKE', "%$queryString%");} 



5. Comment utilisez-vous la validation unique pour deux colonnes dans Laravel ?

public static $rules = array('UID'=>'required|unique:{tableName},uid|unique:{tableName},user_id');
