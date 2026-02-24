jQuery(document).ready(function($) {
  const accordionItems = $('.js-accordion-item');
  accordionItems.each(function() {
    const item = $(this);
    const header = item.find('.js-accordion-header');
    const body = item.find('.js-accordion-body');
    header.on('click', function() {
      // Close any other open accordion
      accordionItems.each(function() {
        const otherItem = $(this);
        if (otherItem[0] !== item[0] && otherItem.hasClass('open')) {
          otherItem.removeClass('open');
          otherItem.find('.js-accordion-body').css('max-height', null);
        }
      });
      // Toggle current accordion
      if(item.hasClass('open')) {
        body.css('max-height', null);
        item.removeClass('open');
      } else {
        body.css('max-height', body[0].scrollHeight + 'px');
        item.addClass('open');
      }
    });
  });
});
