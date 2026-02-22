document.addEventListener('DOMContentLoaded', () => {
  const realSelect = document.querySelector('select[name="country"]');
  const customDropdown = document.getElementById('custom-country-dropdown');
  const dropdownSelected = document.getElementById('dropdown-selected');
  const dropdownOptions = document.getElementById('dropdown-options');

  // Set initial placeholder text
  dropdownSelected.textContent = 'Select country';

  // Build items from real select with improved styling
  Array.from(realSelect.options).forEach((opt, index) => {
    if (!opt.value) return; // skip placeholder
    const li = document.createElement('li');
    li.textContent = opt.text;
    li.classList.add(
      'px-4',
      'py-3',
      'hover:bg-[#EAEBEB]',
      'cursor-pointer',
      'transition-colors',
      'duration-150'
    );
    
    // Add hover effect
    li.addEventListener('mouseenter', () => {
      li.classList.add('bg-[#EAEBEB]');
    });
    
    li.addEventListener('mouseleave', () => {
      li.classList.remove('bg-[#EAEBEB]');
    });

    li.addEventListener('click', (event) => {
      event.stopPropagation(); // Stop event bubbling
      
      // Update the select and text
      realSelect.value = opt.value; 
      dropdownSelected.textContent = opt.text;
      dropdownSelected.style.color = '#000';
      
      // Close dropdown and update styles
      dropdownOptions.classList.add('hidden');
      customDropdown.classList.remove('no-bottom-radius');
      customDropdown.classList.remove('open'); // Remove open class to reset arrow
      
      // Trigger change event
      realSelect.dispatchEvent(new Event('change'));
    });
    
    dropdownOptions.appendChild(li);
  });

  // Update the open/close event handler
  customDropdown.addEventListener('click', (event) => {
    event.stopPropagation();
    const isOpen = !dropdownOptions.classList.contains('hidden');
    
    if (isOpen) {
      // Close dropdown
      dropdownOptions.classList.add('hidden');
      customDropdown.classList.remove('no-bottom-radius');
      customDropdown.classList.remove('open');
    } else {
      // Open dropdown
      dropdownOptions.classList.remove('hidden');
      customDropdown.classList.add('no-bottom-radius');
      customDropdown.classList.add('open');
    }
  });

  // Ensure dropdown closes after item selection
  dropdownOptions.querySelectorAll('li').forEach(li => {
    li.addEventListener('click', () => {
      dropdownOptions.classList.add('hidden');
      customDropdown.classList.remove('no-bottom-radius');
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', (event) => {
    if (!customDropdown.contains(event.target)) {
      dropdownOptions.classList.add('hidden');
      customDropdown.classList.remove('no-bottom-radius');
      customDropdown.classList.remove('open'); // Remove open class
    }
  });
});
