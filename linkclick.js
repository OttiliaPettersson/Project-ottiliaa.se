document.addEventListener('click', function(event) {
  // Check if the clicked element is a link (anchor tag) with specific IDs
  if (event.target.tagName.toLowerCase() === 'a' && (event.target.id === 'link1' || event.target.id === 'link2')) {
      // Push an event to dataLayer when a specific link is clicked
      dataLayer.push({
          'event': 'link_click',
          'link_id': event.target.id,
          'link_href': event.target.href
          // You can add more data attributes for specific link clicks if needed
      });

      // Log a message in the console when a specific link is clicked
      console.log('Link clicked:', event.target.id, event.target.href);
  }
});
