<table border="0" cellpadding="0" cellspacing="0">
    <?php if (!$projects->loaded()) : ?>
        <?php foreach ($projects->find_all() as $project): ?>

            <tr >
                <td width="10%">ZA <?= $project->ZA_Studiennummer ?></td>
                <td class="even" width="13%"><?= $project->theme->Thema ?></td>
                <?php 
                $bearbeitung = '';
                $datum = substr($project->Datum_der_Bearbeitung,-4);
                if(!empty($datum)){
                    $bearbeitung = '['.$datum.']';
                }
                ?>
                <td  width="50%"><?= $project->Projektautor ?> (<?= $project->Publikationsjahr ?> <?= $bearbeitung ?>), <?= $project->Projektname ?></td>
                <td class="timelines" width="22%">
    
                    <?php $tabellen = $project->getUsedTables(); ?>
                    <?php count($tabellen) > 0 ? $tabellen = '<br/>' . count($tabellen) . ' Tabellen' : $tabellen ='' ?> 
                         <?= HTML::anchor('project/tables/' . $project->ID_Projekt, $project->Anzahl_Zeitreihen . ' Zeitreihen<br/>(' . $project->Zeitraum . ')' . $tabellen) ?>
          
                </td>
                <td width="150" class="details"><span><?= HTML::anchor('project/details/' . $project->ID_Projekt, 'Beschreibung...') ?></span></div></td>

            </tr>

        <?php endforeach ?>
    <?php else: ?>
        <tr >
            <td width="10%">ZA <?= $projects->ZA_Studiennummer ?></td>
            <td class="even" width="13%"><?= $projects->theme->Thema ?></td>
              <?php 
                $bearbeitung = '';
                $datum = substr($projects->Datum_der_Bearbeitung,-4);
                if(!empty($datum)){
                    $bearbeitung = '['.$datum.']';
                }
                ?>
            <td  width="50%"><?= $projects->Projektautor ?> (<?= $projects->Publikationsjahr ?> <?= $bearbeitung ?>), <?= $projects->Projektname ?></td>
            <td class="timelines" width="22%">
                <?php $tabellen = $projects->getUsedTables(); ?>
                <?php count($tabellen) > 0 ? $tabellen = '<br/>' . count($tabellen) . ' Tabellen' : $tabellen = '' ?> 
                <?= HTML::anchor('project/tables/' . $projects->ID_Projekt, $projects->Anzahl_Zeitreihen . ' Zeitreihen<br/>(' . $projects->Zeitraum . ')' . $tabellen) ?>
            </td>
            <td width="150" class="details"><span><?= HTML::anchor('project/details/' . $projects->ID_Projekt, 'Beschreibung...') ?></span></div></td>

        </tr>
    <?php endif; ?>
</table>
<script type="text/javascript">
    var uri = "<?= $uri ?>";
</script>