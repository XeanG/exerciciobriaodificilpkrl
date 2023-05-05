-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Maio-2023 às 03:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ahahahaborges`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartuchos`
--

DROP TABLE IF EXISTS cartuchos;
CREATE TABLE `cartuchos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_cartucho_cd` varchar(255) NOT NULL,
  `ano` int(10) UNSIGNED NOT NULL,
  `sistema` varchar(255) NOT NULL,
  `tela` blob NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `id_sistema` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cartuchos`
--

INSERT INTO `cartuchos` (`id`, `nome_cartucho_cd`, `ano`, `sistema`, `tela`, `id_usuario`, `id_sistema`) VALUES
(5, 'alo', 2001, 'PlayStation 2', 0x89504e470d0a1a0a0000000d494844520000010f0000005208060000004a4851a3000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa8640000238c49444154785eed7d09981dd575e6fff6b5f755ea56776b4108a195cd06c4e20031636cf047bce060e38c1d3b26fef0d871fc318ebf2fc699711c32762026044c0630786c76991084c180d844408ac0c2da575a4babfbf5ebf5f5dbd739ff79af9aa7466b49cc28707fb8aaaa5b75abee7bfdce5fff39f7d42dc7ac59b34a10944aba508c8f8f57d60c0c0c0c0e0e676569606060704c30e4616060600b863c0c0c0c6cc190878181812d18f2303030b005431e060606b6606ba8f6ae7bee467d7d3d6a422164b359a49319b85c2e848321f8fd7e7476cdc096ad5b914ca6d1d0d28ca203884407114f260017e0f17a11198aa0361c466d6d2dfc2e0f0af93c4a852242fe001cd2954ca67c4e0bec53747808c1800f41b717d95412a562113e9f0f6e97174559774a3bb7db8d7cbe0887c38192d3a14ba7d3a94b87c3a5cb3ffe93cf57ce6a60606017b694477b7b3b72b91c868787d56843422234d06432894422a1eb353535686d6d455b5b1b1a1a1a100c06e1760a190841846b82421c41219d148606234a021e97b411f2c965d39093c2eb76c22f24532ae4909273665209947279e11e875c27ae24110804502814904aa5b43fec0b4987cb7ca9a8fb58f2424c56e171060606c70f5be44175c13b3855074ba95490ed120a62b0e96c06914804b1584c0dd5325a2a1bb621d2f10978643527ea21e071a346ce877c0e6e94b4e4d229e4858872421a6e218296ba3a740a11d5095964e37125209e3b23d72e56cecb5290b65439102202554765699592a328cb7714968181817dd8725b1e7aec5155175408bcd3d3cdf08a4af0787c7a1eae8f8c8ec2e9f1a2a9a9490d7c34368e743a8d7c318750d887d1912836addf8873ce3a0b5d1d33101b1fc3e8e03046c435191d1a4162624214464a94431ed3a64d1705d32a8421ca8364535f8798eca7aaa0faf079fc9324e574d3d52973a29295f4d325cb92146bf9a75ffd8aee373030b00f5be471dfafee2fbb210eb71242369d5137828ac4e3f12018aac1d0d090ba0ee17058f48013295124249a4c3685daa047dc912c56bfb6060b17ccc748645888288fd8480c255120f96c417a5694ff1dd2975139b757dca09090810b350df5682091140bea9e10ec39fb5f2a39caca4340e2704affa83ee82e71e9729495c8d7bef6b5f24147406d7d3bbe7ce3a3689936a7520321b511dcf3bf3e83fe3d1b2a352707befa574fa067ee3978fa911fe2e515b7556a4f2ca6752dc097bef33042358d951a20dabf0377dffc29c4c6062a35061f14d8228fc79e58ae71061a3703960c74729b6a84a4120886f51c7423a80c9c4e3772a20a784c7c62148d7541143249258fa6863a6c58b7019dd3dbe177f9e0f5b8943c025e0f6ac375a22e724a0a8c73442251145d0ed40879344d6bd7580b632c745f785d5f30a484a281562a0d9747d7ad62054eafbdf6daca273934167de893b8fa4bb7c0eb0b546ade413693c2f27bbe85dfaf7ebc52f3fec78557dc80cb3ffdbdcad681385909d5e0bd852df278e2c97fc584b80d741368c034522b68490542f54145c251108fdfa76dac606662621c2db501bcf2c273d8b4613366f574c15970a06b46070ae93cc6c746501faa43369b86df1b1015e3474b638b5c832a64020e9f075bf6f521d858a781585f508c5b1405c981d7f24a11da508541b228138747d72df2b8ea13576a9f0e856ac5d1bb6d0deefadbf2f1d577de43d513d5fb2c124a254675bbae713ade7cf511bcfacccf8ed8667ca44f03c8d3bb174c121661915a759ba9cae3602aa15a954c2583c32988ea73b1ef8ffecb0d5a5f4db087aa27aafb697db7758d1dd8b67e25169c7585d6b3fd6fa57fd6f73e95903ef595db70c6f99fd6f5a9e47d3085f85e2a3083325c62803755d62741233f1caebcea4a250916c61dc83b240c1a26db5a01558fc7ab2e038761f3721c039dc57c467e4c5bf1f273cf2124aa654ecf2c84bc3e0c47065114f78743b5a9781c0e39b636104458b6bd4200d9541a6951193ea9f38683188f27842480193366a0a5b555d547565c9e503884827488d7b78ab08bf6dbc2430f3e58593b384e5d7c29969ef7698c4477e317b77e0199745cebe3e3836ad08dad3df8e56dff55eb0f66a4f54d1d6868e9c6a6377f83b6ce79386de9e5badf1fa8d11ffe86b54fe2935ffcfb23b6a9ad6f434d7dabee77b93d9875daf938fdac8f4f1a25dbe47219ecdebe06675ef039dddeb1e9158c46f7e0ba6fdeafdbd5605f776c7c09b3e69d878f5df3033da705f6a573d61978e395072a35efe08c659fc5fca51f5512f8c53f5e57a905227d5b5014d7d4edf14fd61f4cb1b11facdff4c653ba7dc6b2cfe8676b9d3e57b789a6b65938fbe2cf4ff699eddb3ae6697faa898360bf67ca67e067e1dfe48b7ff12b74f42cacec2da36bced9faf7631f0dde1b94238bc7081d0a1542e092c6c9d116ba17bccb73889643b67d7d7da8ad0bcb8f2baf718fa0cf0fbf90c5bedd7bf0f8238fa1b9be01dd1d33909e482036328a4c3c89c4780ce34323c825d3e2d6643131362e3f80210cecefc7981c43f788c79c326b362e38f73cac59bd5ac96968282a3f28a7066739fae31375e2f17b101d19c64432a1eb817040e326543447427df30cfdf1eeddf5bb77dd8979b7fba7ef5f3a597fcac28f4cde91ffea4fdaf177df5ca277f153175da2c66a81a4f1e01d5fc34d7f3653b78fa5cd6d7f7da9de8983e106251eb6a12113d50668817dbbe5bbcbf4b8eaf37b44c955df9d790eeb18164b1d4c85758d2d6f3dabcb6af0ee5eddeec3977c49bfbba99f8dd75d52450084750cfbc1368989613d9eaa81e07734bd6b2166cc5aaa9f9fdf038fe77eee3bffa37fa6c711d677657d167ecf1f24b7f2ff076c9147f96efe0eaaeff22c8c73b4b4b460fffefd6acc5e51259e8a52d9b16d3b7c2eb7b82635088ae2c824843462e28e083138f24524659ddb132412218cb1e191c9323c18c5c0c000224226b5e11a5c7cc1857861e54acd0ff189ca219951f5d085227969c25a6727eaeaea34804bd78c7927478b4651021628f3fff6e70393e57bb76d5243b70c8b7746d6fff75bd7a9a14c35542a96deadafebfab1b649c486908c8fa8816cfbfdf3ba8f77d5a301dd19ebfc16784e9e9b6e8ef57978773f12aa898ac75b6d59bef5a3559873fac57a1d1a3add328244f6c6aa8774bdbafdc13e8b45d663437b753f11ac6912d26c54b2b8e16f9ed36b59ee96f5f721a9917caeb9fe4edd6ffd6d0cde5bd8220f9100e20870a483caa31c2b2169949c252d0ca2526d1472792d9954125eb7280431fefe7d7d98d9dd837a31fe6226a7ee08532f42e28ed4d5d6a2aea6566319f5b2643c8544c4520e888a0be3f5a26fef3ef98145b168fee9d8b57d87fce0c6c5b571c32112dae3716bd62a8966d5aa97b17af56bd8dbbb1b2d8d4d0888fa191f1dd3fe1e0ed68f973f58fad376c01f3315ccb1c04e9b83817da631dff4b3b7f1faf3f74cdefd2d58cac4523404898c6d0ef67907f76fd36535991e0c49510e24b9ff57b0fe3e543f541b5432563d8986846ff0dec1b6dbc2c23bb9b5ac0eb8729d6e0deff28c858c8d8da128db9b376c540552170aabb2188a46350e12644a7ab1341970a562f006a4085138850c5c5eba213e25905028805c3a830debd7cb0f3f8e9933bab079fd066d4b022359b5b5b662c9922598366d9a9e8f99b004fb41d7ea48b0eeccbc8b5ef3e777699df503ad3638c2322c4b8257974305ececb43916f49cfa610d485aca2554dbac77efa96030f28737cc9f2417b661dba9d8befe05fdcc542a9642617094fda5ab60a984782caac755bb1434ee33977d56d7adcf7d2cb00889e7b5dc16ab90002df791b0fa64b93df3165fa64b83f706b6c98381d2228b924701fccf22917c3ecba3d4f835cf43ea4646461019d8afcfbfd0c0e9f850a19028088eded0c847c6463134328cf18998c62b62f1098cc5c6114bc491ce65f5ba3e396f622c86817d7bd1d5d981fda2664846cce3e0fe09695b531bc692858b3077f61c2c5eb44095523a95407353835eef70e00ff2f9c77fac46512ded597847a371d0d8687c9661592e88550e751727ecb4b103921f5d16abcf16a6ba60965b53ed5a55839ff395a7efd0f5a97da6ab40c564b91c543afcdea6ba64fcbed65594c1b18084c4735b6aa2fadafc1cfcbef8bd55d75b6ecdc1623406270eb6c9c3228a8315eea7abc13bbddfeb4393b8210c78f2b914160e9932b0ea737b3486b171e346ecd8b143d7a3a246182b219190348664b9af4f7ed47bf760b790455fff005289246ac4cd61725a36931197c88d71b996bb3264cb61629e87b18fcd9b376b1d1508dd1992d4d180c1b67fb8f1dc03e43e61dd01ad20210d8b438aacb7c075de91abef8ad5b0d3e658c0be33b06a810149de8d69e473175da2eac6ba3b5b38d2f5d966aaea22f8fd50b958c3b4bc3687512d3542f0fa5355c2b180e7b65c120bdc669f784e0e314ffd3b59fb0dde3bd8caf3f8f9bdffa22e0253c11d955c0a87ac33194ceba5cee374a991338e11f006b06dcb56bcfcc28bfabc4a9ddb89742c866824a2814dc621d8ae2e5ca3710eba271c39e1928a834a249dcd4e924073732b7a7a7a30a3a71ba3a938224351b477cfc099e77c0825397758ae39301811055450529ad6d6ae0fe9d58abbc400ee15575d5df92406060676617bb4858570eaba90070b75851088cbed15772389c6e626bdfb970a7934d4849530427e0f3c1e97104214fd83fd42080e21834684037c3e258b7c36a723290c9a92404826543224b4c1a161f44706554dac67cc4388888155b6c967c41512fe63e133313b76ecc4ae5dbbb070e142251d8efe30a5dde5756bbf0d0c0c8e0f36dd16c63a0ab222965ae2299c28169cc8171cc8e6816c5168c4ef5702a1f17b9d0ef84a453406bc08c87230da8fd1f82832853432f934e28909c426c65162c66ad00f8fa88769ad6de8e9ea86d7e515099c17c2f1c1ef0b2a095045a45209f4befdb6124b6767179272ad4c2a03144aa260ea307fde694a400cd876cfec16e592464998a550920e1a18181c376c918798e001f18d62de8a77d0fd81ba0be94c4edd98622e8f756bd7e28d35ab51ca64649b4fe11610f079e0f77ac0293ebca2069a1aea5569848301752f92133164d269b436b7605a733b0ad9022203033a4c1b8df4239d4c627070504823a124d6dcdcacd7cbc9710cca76b4776056cf4c3436360ad1a4d53ddab76f9fb6313030387ed8240fa7dcc5cb81531d75218148b1e2264ece9d5128cfec459761fbf61dd8b6790b3c2eb7b8175984fd41b43635a3a3ad1ded4d420ea23298663e7dfa749da12c20aa858a81b91b6e716beaeb6a307fce1c2c3c651eda854c1ac2b5686b11b2909e9484a8025e1f1aebea8560724809a9d05de9efef472c165797c6c9b11d21188ec8ecdfd7af7d343030383ed87ab6e5aaab3e5e8e7bf0013401e31d7c108dc153610e9aaaa6a5336b34ecf761c7a6cd18198ca0a1a606f1d838dc728cdfed5685c098456d4d5d39214c488529ec2e210d0ee3864481f0b918924e5767277aba67a2bba313f3e69d8a3973660ba9d4a3a6be16be801fe3f1097db625964894894d888cdbb5b575a26c7c93c9660139f6f17ffd37edb78181817dd8521e240a1a287586153c65b8b41c3c850e957218966e87ae0b115095701de2e2a4c612c82432f038ca8fdd07022171758a3ac769528e89a7923a2c4b37838a8699a11c96750991f47476a0b5b1014139676d2888d4445c154e3432a8fd68ac6f40734333a64d93e35adae1f5f8a51f4c207389da69c529b3de49d3363030b00f7b6e8b0637a82f0e04eb9929aa895c62dc6eb753874675ca4031604e88ccc4312a0fb7b4e7b17921043e48373a3ea69324ef1bd88f3d7dfbb03f32804ddbb662ddba75d8b973a7a6b5f709998c468710ed1f403f8778c7c6843406101b1fc5e828270d1235130e975d1eb98e66a872d858b67dde80281a8ff4c7044c0d0c4e046c91475e8cbe3ac641705d334d8b39787d6e250c668f32e641c5c1fdd24215008d9ad30926d3594487463024c69f29e49191fdb14c1a83b151247319f40f0d6247efdb9848c49093f38e8c0d8b1ad923e7ce8a5f22d7926bf03a4c28230131296daf108f66a28ac2912eca2774e9484d3028a4e2f695eb0c0c0c8e1bb692c46ebfeb9fca7774a7071e57f9eecefc0ebeea808284cfa2a4e213a80f871070b8f16f8f3c82be9d6fa39eee492a0e8718b7d351424294c8683c06b85da8a9ab4541dc0e6680a613495524f9741e6d4dcd583c7f81a88b71f46edf89191dd3346ee10d892b24445494b62e2186accb89d3162f42dee144ebf419983ea313994a3afbe040a49c78262e0de31ee75d747ee5931c1c9ffd6cf9598c93090f3d547e32d5c0e064812de5e114f94f05c1e90173a218f25401a20cd46d1102600e068d95869b29e6d1d9d32d04e1443c9d92a54754460163745512134815c4a511c5124b27319e8823218a23256d78acdbef464d531d12f98cce4d1a6ea8c3fec1084626c675ae0e9203af9d953e50c97845e9305ec26c573e135394feb1af9bb76cc39a356b557d4c4c242a9fc2c0c0e078608f3c546994a7f46329bb24e24988db912f955fb34083f65021f87ce89cd98d39f3e7ebfca3b2171399942e5d7eafa80d513a1331f44707111d1d46428c9f8440f592101766f38e6d58b761bdba3059b9425e7a3c121b47be50428ab1944211a3137121a81e211827c2a22e9849ea94f63c07fbcad118e9a8a6ba1f6924c9c0c0e0e8608b3c183760b15c1d124819e599c5f8cc0b33393963fa9efe3e7883e22a5cb80c3366cf126591435a1ae7e9e2b8452df8fc707b195c2d0739ad9119b7187e536b8b4e3118cf24b07eeb46ec1bdc8f5053bd2a97643e879cb83e24224f28801671671c012ffcb561c444f9a4f259718b921a4b699bde86e99d7c3cdf298472e447f20d0c0c8e0c7b01d37c7e3239ac9a407897e7306e56dc8cacdcfde9aab8837e144471f8c4a8eb5a9ad03f1c053c2edd4f75c2f93a38d3577363131a6aea3481cc2b44c2097e62a363fa24ec7c512df34e9f8fe6696df0878208d4d588eac8cb394a726e174e39ed34149d2e513201e485501c724eba2e6971898ace22bac46dea11e2e2e4c824103b601ce4faebaf475757d7e4f68d37dea8e5f2cb2fd73a03830f126c5912631d56539287553822c2973a394551301e911612a96daa13e5905297e19405f3c57d99a7af61e028090988ed982322e60e8fb81d4197076df58d98ddd985764e2624e76290b3bbbb1bd3a6b5ab4be263f29890c668228196ce4e74ccea16359357e2c8e4cb7116ba45d992a81c715334905b2a606c6c04f1e4d13d927f38904098f6fed65b6fe1e69b6fc6d34f3f5dd96360f0c181add1969fde79a72a0dbe32521fc7a7db22aaa32077f992a88c92cb2946ccc4ac92268b4d8882600a7a2995c56d3ffe0912d141f8e418ce3bca47f7e5e29af7c1b474120583ad1ce60dc892e7671c64647c4c0829c354347187f84618a7c63f2ebff21368eae8505788531051d170a876e6cc993abf075f5fc93ee4336904e47abce6a597fe61f9831c025415a79f7e3a2ebbec3275a3a8b4e2f1b82a2bce3d72c61967683dc1d76aeedebd5bd3eb09a6d773bed4679f7d16575c71852a2782096f7ca86feddab59a9372e18517eaf032dffbcb73ac58b142e738b1ae49f03c77df7db7ae9bd11683930db694075543b5ebc26069598c946736f587fc088603a86f6c4043731366ce99ad6fc67ff5f5d5784d4a3657402a91d6898e93a21eacd9d239a7a92323e7957d03bd7bb167e74e4cc4c6e1f77935a394cfa9300d7d4cc8cde1f160f6a9a7a2a6a11113a26aa83aa836189475f93c42227921b08c8ebe70bfbe704a0820163f3c31121671f0f9182a8bd5ab576bf219d1dbdb8be5cb97abc15379dc71c71dbacefdcc33e1f13478b6271e78e0012d241112a18572129d5b8fe7392ce2d8b2658bd6b10d634027e3b0b18101618b3c982a9e1363b7088427e114803ea7177eb9cbaf79e5353cf0f35fe2d1071ec12b2b5fc69a5757e3be7befc7bdf7deab095b7cfa3599ca2032348ce820670ce35483710c0c46b16bf71e6cd8bc4595c6b090c4868d9bf0e6efd6611f1f749b8823121d4292f377c845172d5eaa6e0c554e799676314ec65aa40c4722d8b97d3b36fc7e1dd6bdf986def157ae7c0ebffef5afcb1fe230b054c4860de5170ead5ab54a95c3e1c0ef814fee12241faa27ce39b267cf1e2d6fbffdb6eeab86753cb160c102cd71b15c20b6617b4e3fc0f319189c6cb0451e8db57508f9fc7094c4751017221e4be0ededbbf0e4f227f0d31ffd04b7fccfbfc78a0797e3813befc5df7def07b8e93bdfc363f73f88b1c8882a8e91b17114846cbc81b0b81a4e8cc453188c27101102e913176758d4424414c9ee8141f44606d037328c5d62bcbd7c958310433c9bc6ce3dbdd8b273abdccdc5912915e114e3e52c653e718152e2160cedefd3c987fc1eb7be899f738af0ce4fd7e84860009743bad553161ec995ab06e71121e89e58a0ea21c11c0a542e9c56c00ac2b29c7ffef907a81503839309b6c8e3df57bd8aa79e5c81bbeefc196efaebefe33bdffe4bfc8f1ffc0d7e75df2ff0d2ca17e1ca3be02e38df2945c61e5c7009d93038ca675c52629c191d3129222f069f15c3ca0a0930972325eb7151374c144bcb319c1b24214a870a83f91dfe6000eb376cc653cf3c8d7e21977028a4931ba7c5a5618cc32d2e5488af9e14c218157533d83fa0ae567353d3a4aa3819c118075d96ea72ebadb76a9cc5c0e064832df2b8fdf6dbf1f0c30fe3f5d75f5739ce1f3da7042482fea0065fab03b016185865c9e4d242163970662f17df5eef76c2290aa21c7795752198423e8b92108b1c02be2786ea82814fc60ac6c763421194fdfdd8bb4714462a8b9a9a3ad4d73722361e474da046d45123da5aa7a1b3a30b4d4d2d421e05ecdad98b35abd76a5f0e07aa0c5e8771080b5423470b4b71580a84a0b2389c8aa032618cc31a0a363038d9618b3c685434261a874ede1308282968f0548a451e072310c20ab8124c28e3488d452cc225707b9cda962a85710ccee7c1793e42c1a0ba1d34ce60c08f91e1318d113cfef813d8b1759b3ef8c620241fef2799a55219b8c5609996cefe72bac2458b16e9750f874d9b36a9dbc23804b16cd9327df3dcd1824a8123299c3f9564c0c2d19fc381f11512d6b9e79e5ba979776e8981c1c9045b9301e5c595a0f1578fb8d0f069a87cfc9df5d5e4c181180b0ea9a3aae0f11ca575c99299a9259e47630245210df957ce4166e37ca61e39afd7e7d5f7b53005bd7f7018b96249dd1e1ae9debd7dd8be633bf6f747445dec94365e2599a6c6162536b7d3a3a4c247f29942fff24b2fc9990f0dba361c9d59bc78312ebae8227d7915df3bc3cfb67dfb763d66eedcb93abac2d9d969dc9c058daf8c60a093e093be3ce6acb3ce5212e1ab20a82c387933317bf66c556c6c4f703ffbc884380ee392b0a8c23884cb731ad7c5e06483ad3c0f6bce52feb829c5491e241cbe3a9203b75e31de6af2284f126451085d919c12823fe045d817d04430474194881002d506476e72f98c9e9b0645a30b8bdae1f5461329fc5edc0fb737a06f95e3a8462ac34994137a2c733c1878a4e1f26ecf7951677675abb1723f0df61b377cbdd29783e3bd181e25192c5dba142b57aeb4450426cfc3e064834de551d063384f8795294af0054fc14050ebaac983b4616d73d6f592a3ecde3089cccd897bc475e1dbee5d9c7b8329ed2c42367c41b653fc183ef7c29801335b07e40e3d964ca1246ac2e7f34b3fb25adf50df28d70ea1262c2423e4331c1dc6fab7d6e3cdb56fa2b777b7f4292f6e56a328840e3cf2f083daaf43c17257ec8243abd75e7badba7496b2600e07bf97679e7946b78f154679189c6cb0451e593558063bcb13fb5055d030f8f636eea342984a1e44799baf3f6081b82f453efea2e441b5e1907d3c966f565137489402dd0cae33db349bcd619fb826de402d92d9acc608081211af4fc5c4d88847c88627b25e20459780c9577433e8c6bcf2f28bdaee50385ef2e0f5481c747ba83858e85e59d9a27660c8c3e064832db7259dcc1c480e159784d30ab2ce220f2b782affe8b27c1c1d9b02842be014c1e211a6a80b05501faa8187cfa0706e8e2263a84e14e578a6a9876beaf409dd48248aa1f1180abe10f225d96f9d5f40a2614c824fe3b20df75111695c86792015178b259d8a699b43e164ccea346e8bc1c9065ba32d3458ab5483e460118985a9c78987a10faaa9f2906db16d7da913950341e3e6900b3347b5ad749129e99cae900fd751b59010ca6e4ff9495e1682754c61b7b25fad63acd88935b7a98181c1f1c396f2484c2475c9369601139cc5dc3a8f1abe141ab0ac681d8fe59a3e40c7b6b28f232b3e695e1f0e880209c2eff22097cf6abb9a70adb828410c8ff1559323fa2a85a2d38d8cb04e89ef74114250f2a85cd7222ebd8e10946eb354b24bf9f83f97d913f064ad81c1071db695078ddb22089683e150f5bcac4e6388f2837479f9279dce6a5e06474bd2b27479bc08d5d6c1e1f62095c9214d252144c1f7b1142ad7661fac52bd4d15c337d5517d709d4a84c15dc61d988c65606070fcb04d1ed6f268ca54e81be7a4f00139e693f2884cb6a0337ff1dd2d54089c2fc3170c6042b647272634af235772225d107786b1110709833926744ff2284961262ae988896614435a44da38284d187a95fd2c060606c70f5be471301c0d6910541c0e464bc5ccb94eb783ce06f34dd3d9a2a8830c6aeaead1d0d4ccb02aa2a363a23cc48d61ee879c920fd439841dd435916ba8eaa8280f82f5acd3e1e3c23baac482e5da1818181c1f6c91c75403b4c8a2ba58f5ba546df10e2cc357f743ba2034a2f50c99e6c4e6a9405806a3510c8f8c94275b661095d316ba386b3bcf57ce13b18a6ef3717c39a650c8e96ceef90203a79522eb5a2fc5c0c0e0f871c294077134c46181fb19bfb08eb3c0ad7dfd51ecdddfa70fbee58a42366e97c646d8dd7ca9ac24584842d6688b45482cd63661d559f11016030383e387add1160303038313aa3c0c0c0c3e3830e4616060600bc66d39085a3a4ec7d5d7ff1fbcf1c25d58fbfc1d95da32cebae47acc3fe7d378eabe1bf0b12fde864d6b1e79d731270273975e89cbaeb9191e6fa05253c6fe5d6bf1f06d9faa6c1d3bacfe3f76fbe79088452ab5f671c1c59761e6ac53743d1e9fc0d34f2e4732f9ee577a2e5a7216a677ccc0f3bf5d017d51b9c17f7a18e5718c2051dcffa33f402a3e54a979ef90cfa5f1d4fddfc0addfead1f2cb1f5f8186b6d94a002703ba7a66e9f2fe7bfe594b747000679e739ed619bcff61c8e31841c3bdeebb2b110837576aca60fdd76fdeac8a2154dba6c77cf3965e2d27cad8a37d1b311ad989c6b6f29dfe50d7611fbefcfdd7f0c9afdea7f556bfaab168d975da96e720b8ff8fbfbd6272fb68b0a777175e79f1d9ca16b0bb77275a5adb110c86749be472dd97fe1cd77cfecb686939faf31afce780218f13001a2d5d819ffff0626cfbdd13b8e28bb7231d1f51b5b0eac99bf1a13ffcc6bb8cd70ee84e51798c44cab3991dee3afe603dbcbe90eedbfed66ff0e1cbbf790031f4ed58ad2e51c7ec0fe976cf691763a87feb71b9329c43369988eb2301cd4216e72dfb085e5cf9341e7be817fade1e83f7170c791c27daba1663b1dcc57f73ff0d6a789681efdaf4bceedffc1fcb3131d68fdac60eddaec64f6ef947bcb16e3d962dbba0527320dc1e3f3e76dd4f2795c5b57fb9026f6f7a415da7235d872ecfba55f7ebfaef5ebafb00a2208607b66262a44f8f27a9344f3b15bd9bdf3dcf09fbc63eb2af8703c9e294b9a761ed9a7fd798463014c2d8e808fafbf6e9f6a68d6f558e3478bfc090c771a2a97d2e5272f7ef9e7761a5a68c651fbf510dfe2b3f588dc6d65993ae4635befdadff8633972cc4aa55af546a0e4475cc83ca2295185522a8c6a1aec3b6a3833b75fd5020f1cc9a7fc924a9f4ed5cadcb6ab06fec23fb7a2890382efde8c7f11f6b5ec550b4ac5ca8420cdedf30e4719cd0d196953f53f54135404c0d74b2fcf6577fa1fbec826a83f18eff72dd6d93eec7e1ae43d5d2d03a5bd7b9e4f654ecdef232fce146cc3ffb8f6cbb2c8c6b90389e7be6498d8158e04bc50ddedf30e47102c038075d80a5177d59839a5c5f2264423006c180e589089abeb0fcfb08841a70dad9571ff13a240bc631082ea95aa62a0b9e8331938ed9e71cd4653912a838ce3ee77c250e4b7158181a8c88eb12c6b48e4e783c5ecc3f7d71658fc1fb05863c0e03cb25b0cae10880863de39473d58857dcf775bda3b30d63160c589e885c101a3b631e677ee4abaa720e779d74720ceddd4b74dfccf91f998cc94c055d17c64a0ee6b21c09ccdb08856bf0b14ffc918eaab05cfd992fe8680b733dd68a1b73f11f5c8ecf7de14f111532c9654d7ec7fb092649ec7d0812d805577e174ffc6f315a219cc3e133373c8ab1e13dc7ed56197cf06094c707148c9b30cf83cae5d5276faed41a181c3d8cf2303030b005a33c0c0c0c6cc190878181812d18f2303030b005431e060606b660c8c3c0c0c0160c79181818d882210f0303035b30e4616060600b863c0c0c0c6cc190878181812d18f2303030b005431e0606063600fc5f16253a0ee683930d0000000049454e44ae426082, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `deletados`
--

DROP TABLE IF EXISTS deletados;
CREATE TABLE `deletados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_cartucho_cd` varchar(255) NOT NULL,
  `ano` int(10) UNSIGNED NOT NULL,
  `sistema` varchar(255) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS produtos;
CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'Camiseta', '29.99'),
(2, 'Calça jeans', '79.90'),
(3, 'Tênis', '129.99'),
(4, 'Relógio', '249.99'),
(5, 'Notebook', '2599.99'),
(6, 'Celular', '1899.00'),
(7, 'Televisão', '3999.90'),
(8, 'Fones de ouvido', '149.99'),
(9, 'Cadeira de escritório', '699.00'),
(10, 'Mesa de jantar', '1499.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistemas`
--

DROP TABLE IF EXISTS sistemas;
CREATE TABLE `sistemas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `ano` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sistemas`
--

INSERT INTO `sistemas` (`id`, `nome`, `empresa`, `ano`) VALUES
(2, 'PlayStation 2', 'Sony', 2009),
(3, 'Xbox 360', 'Microsoft', 2005);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS usuarios;
CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome_de_usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `nome_de_usuario`, `senha`, `adm`) VALUES
(1, 'admin', '', 'admin', 'admin123', 1),
(2, 'andre', 'andre', 'andre', '$2y$10$b9O9bdmLQ/t7zSnD2TlJzeWZHrbdgJ83ucH/wi7lUg/tGRRbJc6c6', 0),
(3, 'vidao', 'nathalia.fnscf@gmail.com', 'vidao', '$2y$10$Y3bsnW402PJTNkPqQxcKJeC/poM6TGIZSi1qiKEY2NfdyT2xRN27e', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_sistema` (`id_sistema`);

--
-- Índices para tabela `deletados`
--
ALTER TABLE `deletados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de tabela `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  ADD CONSTRAINT `cartuchos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartuchos_ibfk_2` FOREIGN KEY (`id_sistema`) REFERENCES `sistemas` (`id`);

--
-- Limitadores para a tabela `deletados`
--
ALTER TABLE `deletados`
  ADD CONSTRAINT `deletados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
