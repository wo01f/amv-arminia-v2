<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $history = new Article();
        $history->type = 1;
        $history->name = 'Unsere Geschichte';
        $history->description = 'Hervorgegangen aus dem 1896 gegründeten "Akademisch-Pharmazeutischen Kegelklub Carolo-Willhelmina" trat die Sängerschaft 1900 als "Akademisch-Pharmazeutischer Verein" ins Leben. Der Zirkel weist bis heute mit seinen Buchstaben "A", "Ph", und "V" noch auf die Entstehung hin. Mit dem Beitritt zum "Arnstädter Cartellverband" im Jahre 1909 nahm die Verbindung den Namen "Arminia" an. Die Zugehörigkeit zu diesem Verband endete 1913. Ein Jahr später, im Jahre 1914, trat die Arminia dem SV bei. Neben der Tatsache, dass die Verbindung nichtfarbentragend war, trug auch der Einfluss des SV-Ortsverbandes Braunschweig zu diesem Schritt bei. Nach dem ersten Weltkrieg konnte die musikalische Arbeit in der Verbindung, die zunehmend Angehörige aller Fakultäten umfasste, intensiviert werden. Der Auflösung der Korporationen fiel 1935 auch die Arminia zum Opfer. Der damalige Vorstand des Altherrenverbandes konnte den Bund aber im geheimen weiter zusammenhalten, wozu auch das Weitererscheinen des 1924 gegründete "Arminenblattes" bis 1944 beitrug. Einige Erinnerungsstücke, unter anderem auch die Arminen-Fahne, befinden sich heute in der Erinnerungsstätte des SV in Sondershausen. Nach dem Krieg fand 1949 in Vlotho das erste große Arminentreffen statt. Im Januar 1950 wurde die Verbindung zunächst als "Akademisch-Musikalische" wieder zur Hochschule zugelassen, nahm im Juli 1950 wieder den alten Namen "Arminia" an und 1952 dann die Bezeichnung "Sängerschaft". Seit 1973 lautet der offizielle Name "Akademisch-Musische Vereinigung (AMV) Arminia". 1954 erfolgte die Einweihung des ersten Arminenheims in der Spielmannstraße, 1977 bezog die Arminia ihr jetziges Domizil. 1987 entschloss sich die Aktivitas, auch Frauen aufzunehmen und gründete 1989 den "Verein Philistrierter Arminen (VPA). 1989 sowie zuletzt 2013 stellte die Arminia den Vorsitz des Sondershäuser Verbands."';
        $history->save();

        $aboutus = new Article();
        $aboutus->type = 2;
        $aboutus->name = 'Wir sind Arminia!';
        $aboutus->description = 'Bei der akademisch, musischen Vereinigung Arminia treffen sich sowohl Studenten als auch Studentinnen verschiedener Fachrichtungen, um sich gemeinsam musischen, kreativen und gemeinschaftlichen Interessen zu widmen. Neben unserem vierstimmigen Chor betreiben wir auch eine Theatergruppe. Spaß steht hierbei für uns im Vordergrund. Als zentraler Punkt dient unser Haus Am Wendenwehr 9, das durch große Räumlichkeiten und mit einem Garten zur Oker ausreichend Platz für die unterschiedlichsten Aktivitäten bietet. Ziel der Arminia ist es, die während des Studiums gewachsene Verbundenheit ihrer Mitglieder ein Leben lang aufrechtzuhalten. Wenn wir nun dein Interesse geweckt haben, bist du herzlich eingeladen, bei uns vorbeizuschauen. Wir freuen uns auf dich!';
        $aboutus->save();

        $rooms = new Article();
        $rooms->type = 3;
        $rooms->name = 'Wir vergeben zu jedem Semester einige Zimmer.';
        $rooms->description = 'Unser Haus bietet mit seiner Lage einen direkten Zugang zu der Oker, eine unschlagbare Nähe zum Campus und einen Anschluss zur Straßenbahn. Außerdem verfügt es über einen gemeinsamen Garten der sich hervorragend für Grill-Partys oder eine Weinverkostung eignet, sowie eine große Küche, einen Saal zum Lernen und Musizieren als auch ein Wohnzimmer um einfach nur zu enstpannen. Die Zimmer sind bis zu 25qm groß und studentenfreundlich günstig gehalten.';
        $rooms->save();
    }
}
