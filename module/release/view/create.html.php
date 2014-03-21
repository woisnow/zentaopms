<?php
/**
 * The create view of release module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     release
 * @version     $Id: create.html.php 4728 2013-05-03 06:14:34Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<div class='container w-900px'>
  <div id='titlebar'>
    <div class='heading'>
      <span class='prefix'><?php echo html::icon($lang->icons['release']);?></span>
      <strong><small class='text-muted'><i class='icon icon-plus'></i></small> <?php echo $lang->release->create;?></strong>
    </div>
  </div>
  <form class='form-condensed' method='post' target='hiddenwin' id='dataform' enctype='multipart/form-data'>
    <table class='table table-form'> 
      <tr>
        <th class='w-80px'><?php echo $lang->release->name;?></th>
        <td class='w-p45'>
          <div class='input-group'>
            <?php echo html::input('name', '', "class='form-control'");?>
            <?php if($lastRelease) echo '<span class="input-group-addon">(' . $lang->release->last . ': ' . $lastRelease->name . ')</span>';?>
          </div>
        </td>
        <td></td>
      </tr>
      <tr>
        <th><?php echo $lang->release->build;?></th>
        <td>
        <?php  
            echo html::select('build', $builds, '', "class='form-control' onchange=loadStoriesAndBugs(this.value,$productID)");
        ?>
        </td>
        <td><?php if(empty($builds)) echo $lang->build->notice; ?></td>
      </tr>  
      <tr>
        <th><?php echo $lang->release->date;?></th>
        <td><?php echo html::input('date', helper::today(), "class='form-control form-date'");?></td><td></td>
      </tr>  
      <tr id='linkStoriesAndBugs'>
      </tr>
      <tr>
        <th><?php echo $lang->release->desc;?></th>
        <td colspan='2'><?php echo html::textarea('desc', '', "rows='10' class='form-control'");?></td>
      </tr>
      <tr>
        <th><?php echo $lang->files;?></th>
        <td colspan='2'><?php echo $this->fetch('file', 'buildform', array('fileCount' => 1));?></td>
      </tr>  
      <tr><td></td><td colspan='2'><?php echo html::submitButton() . html::backButton();?></td></tr>
    </table>
  </form>  
</div>

<?php include '../../common/view/footer.html.php';?>
