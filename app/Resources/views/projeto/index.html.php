<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>testando serializer</title>
  </head>
  <body>
    <?php
      use Symfony\Component\Serializer\Serializer;
      use Symfony\Component\Serializer\Encoder\XmlEncoder;
      use Symfony\Component\Serializer\Encoder\JsonEncoder;
      use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = array(new ObjectNormalizer());
      // criando os encorders e os normalizadores

      $serializer = new Serializer($normalizers, $encoders);
      // criando o 'serializador'

      $pessoa = new AppBundle\ClassBundle\Pessoa();
      $pessoa->setNome('felipe');
      $pessoa->setIdade(18);
      // criando o objeto pessoa

      $conteudoEmJson = $serializer->serialize($pessoa, 'json');
      // serializando os dados para o formato json

      echo $conteudoEmJson;
    ?>
  </body>
</html>
