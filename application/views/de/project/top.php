<table border="0" cellpadding="0" cellspacing="0">
    
        <?php foreach ($projects as $project): ?>

            <tr >
                <td width="10%">ZA <?= $project->Studiennummer ?></td>
                <td class="even" width="13%"><?= $project->Thema ?></td>
                <td  width="50%"><?= $project->Autor ?>, <?= $project->Studientitel ?></td>
                <td class="timelines" width="22%">
    
                    <?php $tabellen = ORM::factory('Project',$project->ID_Projekt)->getUsedTables(); ?>
                    <?php count($tabellen) > 0 ? $tabellen = '<br/>' . count($tabellen) . ' Tabellen' : $tabellen ='' ?> 
                         <?= HTML::anchor('project/tables/' . $project->ID_Projekt, $project->Anzahl_Zeitreihen . ' Zeitreihen<br/>(' . $project->Zeitraum . ')' . $tabellen) ?>
          
                </td>
                <td width="150" class="details"><span><?= HTML::anchor('project/details/' . $project->ID_Projekt, 'Beschreibung...') ?></span></div></td>

            </tr>

        <?php endforeach ?>

</table>
<script type="text/javascript">
    var uri = "<?= $uri ?>";
</script>