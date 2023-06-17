<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QualificationStorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $qualificationStory = [];


    $qualificationStory[] = [
      "id" => 1,
      "catchphrase" => "Red Bull au top",
      "intro" => "La première séance de qualification du Grand Prix de Bahreïn de Formule 1 2023 est enfin là et les regards sont tournés vers Fernando Alonso, qui s'est classé dans le top 3 lors des essais. Les équipes rivales, comme Mercedes et Red Bull, ne vont pas le laisser remporter la pole position facilement. La bataille pour la première place sur la grille s'annonce intense et captivante.",
      "q1" => "La première partie des qualifications a commencé avec des moments de tension et de surprise. Alors que la voiture de Charles Leclerc sortait des stands, elle s'est subitement mis a  envoyer des débris de carbone dans les airs. Pendant ce temps, chez Williams, Logan Sargent a réussi à égaler le temps de Lando Norris, mais il n'a pas réussi à se qualifier pour la Q2 car il a réalisé son tour en deuxième.
      La grande surprise des qualifications a été l'équipe McLaren. Alors que l'une de leurs voitures n'a pas réussi à se qualifier pour la Q2, l'autre a réussi à passer de justesse. Les fans de F1 se demandent maintenant si l'équipe pourra se rattraper lors des tours suivants.",
      "q2" => "Les Q2 ont été relativement calmes, sans grande surprise. Cependant, l'équipe Aston Martin a réalisé une performance remarquable en parvenant à qualifier leurs deux voitures pour la Q3. Même Lance Stroll, qui avait une blessure au poignet, a réussi à se qualifier. Cette performance est une excellente nouvelle pour l'équipe, qui cherchait à se rattraper après une saison difficile l'année dernière. Maintenant, les regards sont tournés vers la Q3 pour voir si Aston Martin peut maintenir cette performance.",
      "q3" => "La Q3 a été un duel intense entre Ferrari et Red Bull. Après les premières sorties, c'était l'avantage pour Red Bull et Max Verstappen, suivi de très près par Charles Leclerc. Le duel s'annonçait intéressant. Cependant, Ferrari a opté pour une stratégie étrange en décidant de ne pas laisser sortir Leclerc pour un deuxième essai afin de conserver une paire de pneus soft neufs pour la course. Cette décision a laissé le champ libre pour les Red Bulls de prendre les deux premières places sur la grille de départ. Max Verstappen a réussi à décrocher la pole position, tandis que Sergio Perez a pris la deuxième place.",
      "conclusion" => "Les qualifications du Grand Prix de Bahreïn ont été remplies de moments de tension et de surprises. Alors que la Q1 a vu la voiture de Charles Leclerc subir un incident, la Q2 a été relativement calme, mais a vu l'équipe Aston Martin réaliser une performance remarquable en qualifiant ses deux voitures pour la Q3. Finalement, la Q3 a été un duel intense entre Ferrari et Red Bull, avec les Red Bulls prenant finalement les deux premières places sur la grille de départ.
      Maintenant que les qualifications sont terminées, les fans de F1 ont hâte de voir la course de demain et de savoir si Ferrari pourra rattraper son retard sur Red Bull. Le Grand Prix de Bahreïn s'annonce comme une course passionnante et nous avons hâte de voir ce que cela réserve pour les pilotes et les équipes.",
      "extra" => null
    ];
    $qualificationStory[] = [
      "id" => 2,
      "catchphrase" => "La bataille à trois pour la pole position",
      "intro" => "Après la spectaculaire domination des Red Bulls lors du dernier Grand Prix de Bahreïn, l'atmosphère est électrique ici alors que nous attendons avec impatience de découvrir qui sortira vainqueur des qualifications.",
      "q1" => "La première session de qualifications (Q1) du Grand Prix d'Arabie Saoudite 2023 a été riche en rebondissements. Dès sa première sortie, Nick DeVries a été confronté à un tête-à-queue avec son Alpha Tauri, frôlant de justesse un accrochage avec le mur. Malheureusement, plusieurs temps ont été effacés, car certains pilotes ont mis leurs pneus sur la ligne d'entrée des stands après le dernier virage.
      Le malheur a également frappé Lando Norris, qui a accroché le mur au virage 27, entraînant la rupture de sa suspension. Contraint de rentrer aux stands, il n'a malheureusement pas réussi à se qualifier pour la Q2. En revanche, son coéquipier, Oscar Piastri, a réalisé une performance exceptionnelle en se qualifiant pour la Q2, marquant ainsi la première fois de sa jeune carrière.",
      "q2" => "La session de qualifications Q2 du Grand Prix d'Arabie Saoudite 2023 a été marquée par des événements majeurs. Peu de temps après le début de la séance, le moteur de la voiture de Max Verstappen, considéré comme le favori, a lâché, l'empêchant de réaliser un tour de qualification. Malheureusement pour lui, il se retrouvera en 15e position sur la grille de départ de la course.
      Malgré cet incident inattendu, le reste de la session s'est déroulé dans le calme. Les autres pilotes ont pu se concentrer sur la recherche des meilleurs temps pour se qualifier en Q3, la phase finale des qualifications. Cependant, la véritable surprise est venue d'Oscar Piastri, qui a réalisé une performance remarquable. Après seulement sa deuxième course en Formule 1, il a réussi à se qualifier pour la Q3, démontrant ainsi son talent et sa rapidité grandissante.",
      "q3" => "La session de qualifications Q3 du Grand Prix d'Arabie Saoudite 2023 a été extrêmement captivante, avec trois favoris se battant pour la pole position. Sergio Perez, Charles Leclerc et Fernando Alonso se sont échangé tour à tour les meilleurs temps, créant une véritable bataille entre ces pilotes talentueux.
      Finalement, c'est Sergio Perez qui a décroché la pole position, réalisant un temps impressionnant de 1 minute 28.265 secondes. Sa performance remarquable lui a valu la première place sur la grille de départ, offrant ainsi de grandes perspectives pour la course à venir.
      Cependant, Charles Leclerc a également réalisé une performance remarquable en se classant deuxième lors des qualifications. Malheureusement, il a été pénalisé de 10 positions sur la grille de départ en raison d'infractions antérieures, ce qui signifie qu'il partira de la 12e position lors de la course. Malgré cette pénalité, il a tout de même démontré son potentiel et sa rapidité.
      Fernando Alonso a également réalisé une solide performance, se qualifiant en troisième position. Sa présence dans le top 3 de la grille de départ promet une course palpitante, alors qu'il se battra pour monter sur le podium.",
      "conclusion" => "En conclusion, le Grand Prix d'Arabie Saoudite 2023 s'annonce comme une course pleine de surprises et de rebondissements. Les qualifications ont été le théâtre d'événements captivants, avec des incidents inattendus, des performances exceptionnelles et des pénalités qui ont influencé la composition de la grille de départ.
      Sergio Perez a brillé en remportant la pole position avec un temps impressionnant, démontrant sa maîtrise et sa rapidité. Charles Leclerc, bien qu'ayant obtenu le deuxième temps, a été pénalisé de 10 positions, ajoutant une dimension stratégique à sa course. Fernando Alonso, quant à lui, a confirmé sa compétitivité en se qualifiant en troisième position.
      Cependant, la course réserve toujours des surprises et des défis imprévisibles. Les autres pilotes, qu'ils soient sur la grille de départ ou plus loin derrière, ont l'opportunité de montrer leur détermination et de se battre pour des résultats remarquables.
      Les attentes sont grandes et les spectateurs sont impatients de voir ces pilotes s'affronter sur le circuit. Le Grand Prix d'Arabie Saoudite 2023 promet une compétition féroce, une action palpitante et des moments inoubliables. Que la course commence et que le meilleur pilote triomphe sur cette nouvelle piste prestigieuse !",
      "extra" => null
    ];
    $qualificationStory[] = [
      "id" => 3,
      "catchphrase" => "2 Mercedes dans le top 3",
      "intro" => "Après les pratiques, tout semble aller bien pour Verstappen qui a pris la tête lors des deux séances.
             Il est toujours le favori pour la pole position.
              Pendant ce temps, Alonso s'est de nouveau positionné dans le top trois lors des trois séances.
               De son côté, Perez va tenter d'oublier la séance de pratique numéro trois qui a été désastreuse pour lui.",
      "q1" => "Perez ne profite pas d'un bon weekend, après les difficultés rencontrées lors de la troisième séance,
             il n'a pas réussi à effectuer un bon tour de qualification.
              Il a verrouillé ses freins au virage 3 et a échoué dans le sable avec sa Red Bull.
               Quelque chose ne va pas bien pour Bottas après les pratiques,
                il semble avoir un problème avec sa voiture et se qualifie en P19.
                 Son coéquipier le rejoint en P17. Les deux rookies n'ont pas réussi à se qualifier pour le Q2.
                  Logan essaie encore de se qualifier pour une séance de Q2,
                   tandis que Piastry se positionne en P16 pour ses premières qualifications dans son pays.",
      "q2" => "La séance de Q2 était plutôt tranquille et rien de trop surprenant pour les conducteurs qui ont été expulsés de la Q2.
             Alpha Tauri ne possède pas encore une voiture assez performante pour atteindre la Q3.
              La plus grande surprise a été Gasly qui a réussi à se qualifier pour la Q3,
               tandis que son coéquipier Ocon s'est retrouvé en P11.
                Hulkenberg a impressionné une fois de plus en se positionnant mieux que Magnussen.",
      "q3" => "Sans trop de surprises, Verstappen a remporté la pole position,
             mais étant donné que Perez n'était pas en Q1,
              tout le monde s'attendait à ce qu'Alonso se qualifie pour la première ligne pour la course du dimanche.
               Mais non, les deux Mercedes ont surpris et se sont retrouvées en deuxième et troisième position,
                avec Russell qui a battu Hamilton. De son côté, Alonso s'est positionné en 4ème position suivi de Leclerc.",
      "conclusion" => "Avec les deux Mercedes, s'ils réalisent un bon départ,
             ils pourraient peut-être surprendre la Red Bull de Verstappen et concevoir une stratégie pour récolter une bonne quantité de points après un début de saison plus qu'ordinaire.
              Il faudra également surveiller Perez qui devra remonter le peloton pour sauver son weekend.",
      "extra" => null
    ];
    $qualificationStory[] = [
      "id" => 4,
      "catchphrase" => "Ferrari de retour au sommet",
      "intro" => "Après une pause de plus de quatre semaines, la Formule 1 est de retour à Bakou pour le Grand Prix d'Azerbaïdjan.
             Les équipes et les pilotes sont prêts à en découdre sur le circuit urbain de la ville,
              qui promet des qualifications fortes en émotions.",
      "q1" => "La première séance de qualifications du Grand Prix d'Azerbaïdjan a commencé avec un accident de Nick de Vries,
             le rookie néerlandais d'Alpha Tauri.
              De Vries a perdu le contrôle de sa voiture dans le virage 3 et a heurté les barrières de sécurité, provoquant un drapeau rouge.
            Une fois la séance relancée, c'était au tour de Pierre Gasly, pilote d'Alpine, de faire la même erreur au même virage.
             Sa voiture a également heurté les barrières de sécurité, provoquant un deuxième drapeau rouge.,
                   tandis que Piastry se positionne en P16 pour ses premières qualifications dans son pays.",
      "q2" => "La deuxième séance de qualifications s'est déroulée sans incident majeur, contrairement à la Q1 qui a été interrompue deux fois par des accidents.
             Cependant, la Q2 a réservé quelques surprises pour les fans de F1. Tout d'abord, George Russell a été éliminé de la course à la pole position en se classant 11ème,
              tandis que son coéquipier Hamilton , a réussi à se qualifier pour la Q3 de justesse.
            D'autre part, nous avons assisté à la première présence de l'américain Logan Sargeant en Q2.
             Malheureusement, il n'a pas pu poursuivre jusqu'en Q3, mais cette performance prometteuse montre qu'il a le potentiel pour briller dans les prochaines courses.",
      "q3" => "La Q3 a été l'apogée des qualifications du Grand Prix d'Azerbaïdjan, avec une compétition féroce pour la pole position.
             Après leur première sortie, Charles Leclerc et Max Verstappen ont réalisé le même temps,
              mais Verstappen avait complété son tour en premier, ce qui lui a donné l'avantage.
            Cependant, lors de leur deuxième sortie,
             Leclerc a réussi à améliorer son temps et à décrocher la pole position.
              Le Monégasque a signé un temps de 1:40.203, battant Verstappen de 0.88 secondes.
               C'est la troisieme pole position consécutive pour Leclerc a Baku",
      "conclusion" => "En conclusion, les qualifications du Grand Prix d'Azerbaïdjan ont été marquées par des moments forts,
             tels que les accidents de Nick de Vries et Pierre Gasly en Q1,
              ainsi que la performance solide de Charles Leclerc en Q3,
               qui a réussi à décrocher la pole position devant Max Verstappen.",
      "extra" => null
    ];
    $qualificationStory[] = [
      "id" => 5,
      "catchphrase" => "Surprise a Miami",
      "intro" => "Après une fin de semaine décevante à Baku et une réputation en berne pour le circuit de Miami, les attentes pour les qualifications de la F1 étaient plutôt faibles. Mais en F1, comme dans tout sport, rien n'est jamais joué d'avance.",
      "q1" => "La Q1 s'est déroulée dans une relative tranquillité, mais quelques incidents ont émaillé la séance. Hamilton, pourtant habitué aux premières places, a percuté la barrière au virage 17, causant des dégâts à son aileron avant. Zhou et Sainz ont quant à eux frôlé la catastrophe en évitant de justesse un contact au virage 8. Mais la surprise est venue de Stroll, qui s'est positionné en P18, signant ainsi le pire résultat de son écurie Aston Martin en 2023. ",
      "q2" => "La Q2 a été encore plus calme que la précédente, mais elle a réservé une surprise de taille : Hamilton, habituellement en haut du tableau, n'a pas réussi à se qualifier pour la Q3 et a signé son pire résultat aux États-Unis en se positionnant en 13ème position. Ce revers inattendu pour le septuple champion du monde de F1 est un coup dur pour son écurie, Mercedes, qui espérait sans doute mieux sur le circuit de Miami. D'un autre côté, Bottas a réussi à se qualifier pour la Q3 avec sa voiture Alfa Romeo, signant ainsi la meilleure séance de qualification de l'année pour cette écurie.",
      "q3" => "La Q3 a été marquée par plusieurs rebondissements, notamment dès la première sortie des stands. Verstappen a commis une erreur au virage 6, abandonnant son tour et hypothéquant ainsi ses chances de pole position. De son côté, Leclerc a mal négocié le virage 17, obtenant un mauvais résultat pour sa Ferrari. Perez se qualifi 1er pour la premiere sortie. Cependant, la session a été brutalement interrompue lorsque Leclerc a perdu le contrôle de sa voiture au virage 6, provoquant un accident qui a entraîné la sortie du drapeau rouge et la fin prématurée de la séance de qualifications. Avec sa performance décevante, Verstappen se retrouve relégué en 9ème position sur la grille de départ. C'est donc avec surprise que Perez gagne la  pole position.Il a été rejoint sur la première ligne par Alonso, qui a réussi à faire parler son expérience pour réaliser un temps remarquable.",
      "conclusion" => "En somme, les qualifications de la 2eme édition de F1 à Miami ont été riches en rebondissements et en surprises. Si les erreurs de Verstappen et Leclerc ont hypothéqué leurs chances de pole position, Perez et Alonso ont su tirer leur épingle du jeu pour se qualifier en tête de la grille. La fin de la session de qualifications, brutalement interrompue par l'accident de Leclerc, a ajouté une touche dramatique à l'événement. Tout est donc possible pour cette course inédite qui s'annonce pleine de suspense et d'émotions. Les fans de F1 sont impatients de voir ce que cette course à Miami leur réserve",
      "extra" => null
    ];
    $qualificationStory[] = [
      "id" => 7,
      "catchphrase" => "Bataille pour la pole",
      "intro" => "
      Les qualifications de Monaco sont souvent considérées comme la session la plus importante de l'année dans le monde de la Formule 1. Le tracé étroit et sinueux de ce circuit emblématique rend les dépassements extrêmement difficiles, ce qui confère à la séance de qualification une importance cruciale pour les pilotes.

      Cette année, l'équilibre des forces semble être légèrement différent. Bien que Red Bull Racing ait dominé les courses précédentes, l'avantage ne semble pas être entièrement en leur faveur à Monaco. Les équipes telles qu'Aston Martin, Ferrari et Mercedes ont montré une compétitivité accrue, avec des voitures capables de rivaliser pour la pole position.",
      "q1" => "
À mi-chemin de la séance de Q1, un incident spectaculaire s'est produit lorsque la Red Bull a violemment heurté les barrières de sécurité du premier virage, provoquant un drapeau rouge. Cet événement inattendu a semé la panique parmi les équipes, notamment Mercedes et Ferrari, dont les pilotes Hamilton et Sainz luttaient pour se hisser dans le top 5 depuis le bas du classement. Malgré la pression, ils ont réussi à se qualifier pour la session de Q2 grâce à leurs derniers tours.

Un fait impressionnant lors de cette séance a été la performance du top trois. Verstappen, en tant que favori, était attendu en haut du classement, mais la surprise est venue de Tsunoda, qui a réalisé un temps remarquable. De plus, Alex Albon a également réalisé une performance notable.",
      "q2" => "La séance de Q2 à Monaco a été relativement calme, mais quelques incidents ont marqué la fin de la session. Lando Norris a connu une mésaventure en percutant le mur du virage 11, ce qui a entraîné la rupture de sa suspension avant gauche. Malheureusement, il a également heurté le mur extérieur du virage 12. Malgré ces difficultés, Norris a réussi à ramener sa voiture aux stands. Cependant, il reste incertain s'il pourra participer à la Q3 avec sa voiture endommagée.

      D'autre part, une surprise est survenue lors de cette séance de Q2, car Lance Stroll et son Aston Martin n'ont pas réussi à se qualifier pour la Q3. Cette élimination inattendue a été décevante pour l'équipe et le pilote, qui espéraient obtenir une meilleure performance sur ce circuit légendaire.",
      "q3" => "Un grand bravo à l'équipe McLaren qui a réalisé un exploit en réparant la voiture de Norris en moins de 10 minutes, lui permettant ainsi de participer à la Q3. La fin de la session de qualification a été extrêmement excitante, avec Ferrari, Aston Martin, Red Bull et même Alpine se disputant le meilleur tour et les secteurs les plus rapides.

      À un moment donné, tout semblait indiquer que Fernando Alonso allait décrocher la pole position, mais dans les dernières secondes, Max Verstappen a réalisé un dernier tour époustouflant. Il a été en mesure de compléter un dernier secteur incroyable, lui permettant de s'emparer de la pole position.",
      "conclusion" => "En conclusion, les qualifications de Monaco 2023 ont été à la fois intenses et pleines de surprises. Dès les premières séances, les enjeux étaient élevés, avec des pilotes et des équipes déterminés à décrocher une position avantageuse sur la grille de départ. Les possibilités de dépassement étant extrêmement limitées sur ce tracé légendaire, chaque tour comptait et la moindre erreur pouvait être fatale.

      Des incidents tels que les accidents de la Red Bull de Q1 et la collision de Lando Norris en Q2 ont ajouté des rebondissements inattendus à la séance de qualification. Les équipes ont fait preuve d'une grande réactivité pour réparer les voitures endommagées et permettre à leurs pilotes de continuer à se battre pour une place en Q3.

      La Q3 a été un véritable spectacle, avec des échanges de meilleurs tours et de secteurs rapides entre plusieurs équipes. La lutte pour la pole position était féroce, et finalement, c'est Max Verstappen qui a réalisé un dernier tour époustouflant pour s'emparer de la première place sur la grille.

      Cependant, la course de Monaco est réputée pour être imprévisible et exigeante. La position de départ n'est pas toujours synonyme de victoire, car des stratégies, des dépassements audacieux et des conditions de course particulières peuvent changer la donne. Les qualifications ont seulement posé les bases pour la bataille qui se déroulera sur le célèbre circuit de Monaco.

      Ainsi, les qualifications de Monaco 2023 ont offert un avant-goût de l'intensité et de l'excitation à venir lors de la course. Les pilotes et les équipes devront redoubler d'efforts et de stratégie pour réussir dans cette course exigeante. Les passionnés de Formule 1 attendent avec impatience l'affrontement sur cette piste mythique, où chaque virage, chaque freinage représente un défi pour les compétiteurs.",
      "extra" => null
    ];
    $qualificationStory[] = [
        "id" => 8,
        "catchphrase" => "Sortie de Favoris et Grille de Départ Surprenante",
        "intro" => "Malgré un ciel nuageux et peu engageant, les qualifications de la Formule 1 en Espagne se sont déroulées avec une ferveur inébranlable. Les fans se sont rassemblés en masse, déterminés à soutenir leurs pilotes locaux, Carlos Sainz et Fernando Alonso, malgré les conditions météorologiques peu favorables. Bien que les gris des nuages aient dominé le paysage, l'enthousiasme des spectateurs a illuminé les tribunes, créant une atmosphère électrisante.",
        "q1" => "Au tout début de la séance de qualifications, alors que les pilotes s'apprêtaient à s'élancer, un drapeau rouge est agité, interrompant brusquement les préparatifs. Il devient évident que la raison de cette interruption est la présence de gravier sur la piste, provoquant des sorties de route multiples. Parmi les pilotes qui ont été touchés par ces incidents figurent Nick de Vries, Yuki Tsunoda, Valtteri Bottas, Fernando Alonso et Alex Albon. Cependant, la plus grande surprise de cette séance de qualifications a été l'élimination de Charles Leclerc, qui partira seulement 19ème pour la course de demain. Le pilote monégasque a rencontré des problèmes persistants avec ses pneus arrière tout au long de la session, ce qui a grandement compromis ses performances. Cette série de rebondissements inattendus a rendu les qualifications d'autant plus captivantes et laisse présager une course palpitante pour demain.",
        "q2" => "Lors de la deuxième partie des qualifications, la tension était palpable alors que les pilotes luttaient pour se qualifier pour le Q3. Contrairement à la première partie, où de nombreuses sorties de piste ont perturbé les concurrents, cette fois-ci il n'y en a eu qu'une seule, mais elle s'est avérée coûteuse pour Sergio Perez. En sortant de la piste, il a ramené de la terre sur ses pneus, compromettant ainsi son dernier tour et l'empêchant de se qualifier pour la phase suivante. Perez se classera donc 11ème sur la grille de départ, ratant de peu une place en Q3. <br />
        Un autre pilote qui a été éliminé de manière surprenante est George Russell.il ne semble pas aussi à l'aise que son coéquipier, Lewis Hamilton, avec les nouvelles améliorations apportées à la voiture. Russell n'a pas réussi à trouver le rythme nécessaire pour se qualifier parmi les dix premiers, ce qui signifie qu'il ne participera pas à la phase finale des qualifications.",
        "q3" => "
        La phase finale des qualifications, le Q3, a réservé son lot de surprises avec plusieurs favoris éliminés. La grille de départ résultante est donc assez inattendue, à l'exception d'une position : la première place qui a été décrochée par Max Verstappen. Le pilote Red Bull Racing s'est illustré en signant le meilleur temps et prendra le départ en tête de la course.
        Une autre surprise agréable pour les fans espagnols est la présence d'un pilote local en première ligne : Carlos Sainz. Le pilote Ferrari a réalisé une performance impressionnante, se qualifiant à la deuxième position. Cela promet un grand moment d'émotion pour les supporters espagnols qui le verront partir à côté de Verstappen.
        Le top 3 de la grille de départ est complété par Lando Norris de McLaren. Le pilote britannique a finalement connu une excellente séance de qualification, se plaçant parmi les meilleurs et offrant de belles perspectives pour son équipe.
        L'ensemble de ces résultats inattendus et cette configuration surprenante de la grille de départ promettent une course palpitante pour les fans de Formule 1. Les pilotes devront faire preuve de talent et de stratégie pour tirer leur épingle du jeu sur le circuit de Barcelone.",
        "conclusion" => "
        En conclusion, les qualifications de la Formule 1 en Espagne 2023 ont été marquées par des rebondissements et des performances surprenantes. Malgré un ciel gris et des conditions météorologiques difficiles, les spectateurs ont répondu présents pour soutenir leurs pilotes locaux, Carlos Sainz et Fernando Alonso. La séance a débuté avec des sorties de piste et l'élimination surprenante de pilotes talentueux tels que Charles Leclerc.
        Le Q3 a ensuite offert son lot de surprises, avec Max Verstappen s'assurant la pole position, suivi de près par Carlos Sainz, qui a ravi les fans espagnols en se qualifiant à la deuxième place. Lando Norris a également réalisé une excellente performance en se classant troisième.
        Ces résultats inattendus créent une atmosphère d'excitation et d'incertitude pour la course à venir. Les pilotes devront faire preuve de maîtrise et de stratégie pour tirer profit de cette grille de départ singulière et espérer se frayer un chemin vers la victoire.
        La Formule 1 en Espagne nous réserve donc un spectacle intense et captivant, avec des batailles en perspective sur la piste. Les passionnés de sport automobile peuvent s'attendre à une course palpitante où tout peut arriver. Rendez-vous demain pour vivre l'action au rythme des moteurs vrombissants et des stratégies audacieuses, car la compétition dans ce sport exigeant est plus féroce que jamais.",
        "extra" => null
      ];
      $qualificationStory[] = [
        "id" => 9,
        "catchphrase" => "Montréal sous la pluie",
        "intro" => "Sous les caprices du ciel de Montréal, la pluie a ajouté une dose supplémentaire d'incertitude et de défi lors des séances d'essais libres. Alors que les gouttes d'eau tambourinaient sur le circuit, les équipes de Formule 1 ont rivalisé pour trouver la meilleure configuration sous ces conditions changeantes. Parmi elles, les Red Bulls, les Ferraris et les Aston Martin se sont révélées particulièrement performantes, montrant leur capacité à maîtriser les éléments. Cependant, l'équipe Mercedes semble être en difficulté lorsque la pluie s'invite, cherchant à trouver la bonne harmonie entre puissance et adhérence dans ces conditions humides. Les qualifications promettent donc d'être passionnantes, avec des pilotes et des équipes qui devront repousser leurs limites pour conquérir la pole position sur ce circuit trempé de Montréal.",
        "q1" => "Dans la Q1, un malheur s'est abattu sur Guanyu Zhou dès sa sortie des stands. Un problème mécanique a contraint le pilote de l'Alpha Romeo à immobiliser sa voiture sur le bord de la piste, provoquant ainsi un drapeau rouge. Heureusement, Zhou a réussi à redémarrer sa voiture et à regagner les stands. Toutes les qualifications se sont déroulées sur des pneus intermédiaires, rendant les conditions encore plus délicates. La fin de la session a été marquée par de nombreux incidents, certains pilotes bloquant les autres sur la piste, comme Carlos Sainz qui a gêné Pierre Gasly. À cause de cet incident malheureux, Gasly se qualifie à la 17e position, laissant échapper une meilleure performance.",
        "q2" => "En entamant la Q2, les pilotes ont rapidement engagé des discussions radio avec leurs équipes pour évaluer le passage aux pneus slicks. C'est Alex Albon qui a pris la décision de chausser les pneus tendres en premier, et cette stratégie s'est avérée fructueuse puisqu'il a réussi à réaliser le meilleur temps de la Q2. Cependant, quelques surprises sont survenues, car des pilotes tels que Perez, Leclerc et Stroll n'ont pas su profiter de la meilleure stratégie pneumatique et n'ont pas réussi à se qualifier pour la Q3. Ces résultats inattendus ont ajouté une touche de suspense et d'imprévisibilité à la session de qualifications.",
        "q3" => "En arrivant à la Q3, la pluie a fait son retour, obligeant tous les pilotes à ressortir des stands avec des pneus intermédiaires. Malheureusement, le jeune Piastri a connu un incident malheureux en dérapant et heurtant le mur à la sortie du virage 7, ce qui a entraîné un drapeau rouge. Pendant cette interruption, la pluie s'est intensifiée, rendant les conditions peu favorables pour améliorer les temps. Dans cette situation délicate, Max Verstappen a réussi à se hisser en pole position, montrant une fois de plus ses compétences dans des conditions humides. Nico Hülkenberg a également tiré profit de cette situation en se classant à la deuxième place (P2), réalisant un excellent tour juste avant le drapeau rouge. Cette séance de qualifications mouvementée a permis à certains pilotes de tirer leur épingle du jeu et de se placer en bonne position sur la grille de départ.",
        "conclusion" => "En conclusion, les qualifications pour le Grand Prix du Canada 2023 ont été marquées par des conditions météorologiques imprévisibles et des rebondissements inattendus. La pluie a joué un rôle clé, rendant les choix stratégiques cruciaux pour les équipes et les pilotes. Les séances de qualification ont été ponctuées de drapeaux rouges et d'incidents, mettant à l'épreuve la maîtrise des pilotes sur une piste glissante.
        Max Verstappen s'est révélé une fois de plus redoutable dans des conditions pluvieuses, décrochant la pole position malgré la pluie battante en Q3. Nico Hülkenberg a également brillé en saisissant l'opportunité de réaliser un excellent tour avant le drapeau rouge, lui permettant de se hisser à la deuxième place sur la grille.
        Cependant, certaines équipes et pilotes n'ont pas réussi à tirer parti des circonstances et ont été contrariés par des incidents ou des choix de pneus moins favorables. Les qualifications ont donc offert un spectacle riche en rebondissements et ont préparé le terrain pour une course passionnante où les conditions météorologiques pourraient continuer à jouer un rôle déterminant.",
        "extra" => null
      ];



    Db::table('qualification_stories')->delete();
    Db::table('qualification_stories')->insert($qualificationStory);
  }
}
