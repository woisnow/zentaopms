/**
 * Confirm batch delete cases.
 * 
 * @param  string $actionLink 
 * @access public
 * @return void
 */
function confirmBatchDelete(actionLink)
{
    if(confirm(batchDelete)) setFormAction(actionLink);
    return false;
}

$(function()
{
    if($('#caseList thead th.c-title').width() < 150) $('#caseList thead th.c-title').width(150);

    if(flow == 'onlyTest')
    {
        toggleSearch();
        $('.export').modalTrigger({width:650, type:'iframe', afterShown: setCheckedCookie})

        $('#subNavbar > .nav > li').removeClass('active');
        $('#subNavbar > .nav > li[data-id=' + browseType + ']').addClass('active');
    }
});
