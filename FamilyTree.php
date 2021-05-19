<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Person
    {
        var $name, $relations;

        function __construct($name)
        {
            $this->name      = $name;
            $this->relations = array();
        }

        function addRelation($type, $person)
        {
            if (!isset($this->relations[$type])) {
                $this->relations[$type] = array();
            }

            $this->relations[$type][] = $person;
        }

        // Looks up multiple relations, for example "parents".
        function getRelations($type)
        {
            if (!isset($this->relations[$type])) {
                return array();
            }

            return $this->relations[$type];
        }

        // Looks up a single relation, for example "spouse".
        function getRelation($type)
        {
            $relations = $this->getRelations($type);
            return empty($relations) ? null : $relations[0];
        }

        function __toString()
        {
            return $this->name;
        }
        function addParents($mom, $dad)
        {
            $mom->addChild($this);
            $dad->addChild($this);
        }

        function addChild($child)
        {
            $this->addRelation('children', $child);
            $child->addRelation('parents',  $this);
        }

        function addSpouse($spouse)
        {
            $this->addRelation('spouse', $spouse);
            $spouse->addRelation('spouse', $this);
        }

        function getParents()
        {
            return $this->getRelations('parents');
        }
        function getChildren()
        {
            return $this->getRelations('children');
        }
        function getSpouse()
        {
            return $this->getRelation('spouse');
        }
    }
    $john  = new Person('John');
    $jane  = new Person('Jane');
    $billy = new Person('Billy');

    $john->addSpouse($jane);
    $billy->addParents($jane, $john);

    echo "John is married to " . $john->getSpouse() . ".\n";
    echo "Billy's parents are " . implode(" and ", $billy->getParents()) . ".\n";

    ?>


</body>

</html>