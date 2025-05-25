// Enhanced Map Functionality - Works without WordPress API
class MapManager {
  constructor() {
    this.map = null;
    this.markers = [];
    this.reports = [];
    this.reportMarker = null;
    this.localReports = []; // Store reports locally
    this.safeLocations = [
      // Example safe locations - replace with your actual data
      { lat: 40.7128, lng: -74.0060, name: "SafeNet Shelter NYC" },
      { lat: 34.0522, lng: -118.2437, name: "SafeNet Support LA" },
      { lat: 41.8781, lng: -87.6298, name: "SafeNet Center Chicago" },
      { lat: 29.7604, lng: -95.3698, name: "SafeNet Houston" },
      { lat: 39.9526, lng: -75.1652, name: "SafeNet Philadelphia" }
    ];
    this.init();
  }

  init() {
    console.log('Initializing MapManager...');
    
    // Check if Leaflet is loaded
    if (typeof window.L === "undefined") {
      console.log('Leaflet not loaded, loading now...');
      this.loadLeaflet().then(() => {
        this.initMap();
      }).catch(error => {
        console.error('Failed to load Leaflet:', error);
      });
      return;
    }

    const mapElement = document.getElementById("map");
    if (!mapElement) {
      console.error("Map element not found");
      return;
    }

    this.initMap();
  }

  async loadLeaflet() {
    return new Promise((resolve, reject) => {
      // Check if already loaded
      if (typeof window.L !== "undefined") {
        resolve();
        return;
      }

      // Load Leaflet CSS
      const cssLink = document.createElement('link');
      cssLink.rel = 'stylesheet';
      cssLink.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
      cssLink.integrity = 'sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=';
      cssLink.crossOrigin = '';
      document.head.appendChild(cssLink);

      // Load Leaflet JS
      const script = document.createElement('script');
      script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
      script.integrity = 'sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=';
      script.crossOrigin = '';
      script.onload = () => {
        console.log('Leaflet loaded successfully');
        resolve();
      };
      script.onerror = () => {
        console.error('Failed to load Leaflet');
        reject(new Error('Failed to load Leaflet'));
      };
      document.head.appendChild(script);
    });
  }

  initMap() {
    console.log('Initializing map...');
    
    try {
      // Initialize map centered on US
      this.map = window.L.map("map").setView([39.8283, -98.5795], 4);
      
      // Add tile layer
      window.L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 18
      }).addTo(this.map);

      console.log('Map initialized successfully');
      
      // Now add markers and set up functionality
      this.addSafeLocationMarkers();
      this.loadLocalReports();
      this.setupEventListeners();
      
    } catch (error) {
      console.error('Error initializing map:', error);
    }
  }

  addSafeLocationMarkers() {
    console.log('Adding safe location markers...');
    
    // Custom green icon for safe locations
    const safeIcon = window.L.divIcon({
      className: 'custom-div-icon',
      html: `
        <div style="
          background-color: #22c55e;
          width: 30px;
          height: 30px;
          border-radius: 50%;
          border: 3px solid white;
          box-shadow: 0 2px 6px rgba(0,0,0,0.3);
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;
        ">🏠</div>
      `,
      iconSize: [30, 30],
      iconAnchor: [15, 15]
    });

    this.safeLocations.forEach(location => {
      const marker = window.L.marker([location.lat, location.lng], { icon: safeIcon })
        .addTo(this.map)
        .bindPopup(`
          <div style="text-align: center; min-width: 200px;">
            <strong style="color: #22c55e;">🏠 ${location.name}</strong><br>
            <small style="color: #666;">Safe Location</small><br>
            <button onclick="window.mapManager.getDirections(${location.lat}, ${location.lng})" 
                    style="margin-top: 8px; padding: 6px 12px; background: #22c55e; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 12px;">
              📍 Get Directions
            </button>
          </div>
        `);
      
      this.markers.push(marker);
    });

    console.log(`Added ${this.safeLocations.length} safe location markers`);
  }

  loadLocalReports() {
    console.log('Loading local reports...');
    
    // Load from localStorage if available
    const savedReports = localStorage.getItem('safenet_reports');
    if (savedReports) {
      try {
        this.localReports = JSON.parse(savedReports);
        this.displayReports(this.localReports);
      } catch (error) {
        console.error('Error parsing saved reports:', error);
        this.localReports = [];
      }
    }

    // Add some demo reports if no saved reports
    if (this.localReports.length === 0) {
      this.loadDemoReports();
    }
  }

  loadDemoReports() {
    console.log('Loading demo reports...');
    
    // Demo reports for testing
    const demoReports = [
      { 
        lat: 40.7589, 
        lng: -73.9851, 
        message: "Harassment reported in this area", 
        id: Date.now() + 1,
        timestamp: new Date().toISOString()
      },
      { 
        lat: 34.0522, 
        lng: -118.2437, 
        message: "Safety concern reported", 
        id: Date.now() + 2,
        timestamp: new Date().toISOString()
      }
    ];
    
    this.localReports = demoReports;
    this.saveReportsToStorage();
    this.displayReports(this.localReports);
  }

  displayReports(reports) {
    console.log(`Displaying ${reports.length} reports...`);
    
    // Custom red icon for reports
    const reportIcon = window.L.divIcon({
      className: 'custom-div-icon',
      html: `
        <div style="
          background-color: #ef4444;
          width: 30px;
          height: 30px;
          border-radius: 50%;
          border: 3px solid white;
          box-shadow: 0 2px 6px rgba(0,0,0,0.3);
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;
        ">⚠️</div>
      `,
      iconSize: [30, 30],
      iconAnchor: [15, 15]
    });

    reports.forEach(report => {
      const reportDate = report.timestamp ? new Date(report.timestamp).toLocaleDateString() : 'Unknown date';
      
      const marker = window.L.marker([report.lat, report.lng], { icon: reportIcon })
        .addTo(this.map)
        .bindPopup(`
          <div style="text-align: center; min-width: 200px;">
            <strong style="color: #ef4444;">⚠️ Reported Incident</strong><br>
            <p style="margin: 10px 0; font-size: 14px;">${report.message || 'No details provided'}</p>
            <small style="color: #666;">Reported: ${reportDate}</small><br>
            <small style="color: #999;">ID: ${report.id || 'Unknown'}</small>
          </div>
        `);

      this.reports.push(marker);
    });
  }

  setupEventListeners() {
    console.log('Setting up event listeners...');
    
    // Map click handler for reporting
    this.map.on("click", (e) => {
      this.handleMapClick(e);
    });

    // Modal event listeners
    this.setupModalListeners();
  }

  handleMapClick(e) {
    console.log('Map clicked at:', e.latlng);
    
    const reportModal = document.getElementById("report-modal");
    if (!reportModal) {
      console.error('Report modal not found');
      return;
    }

    // Store the clicked coordinates
    this.selectedLatLng = e.latlng;
    
    // Update hidden form fields
    const latInput = document.getElementById("report-lat");
    const lngInput = document.getElementById("report-lng");
    
    if (latInput && lngInput) {
      latInput.value = e.latlng.lat;
      lngInput.value = e.latlng.lng;
    }

    // Remove any existing temporary marker
    if (this.reportMarker) {
      this.map.removeLayer(this.reportMarker);
    }

    // Add temporary marker at clicked location
    const tempIcon = window.L.divIcon({
      className: 'custom-div-icon',
      html: `
        <div style="
          background-color: #f97316;
          width: 35px;
          height: 35px;
          border-radius: 50%;
          border: 3px solid white;
          box-shadow: 0 2px 8px rgba(0,0,0,0.4);
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 18px;
          animation: pulse 2s infinite;
        ">📍</div>
        <style>
          @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
          }
        </style>
      `,
      iconSize: [35, 35],
      iconAnchor: [17.5, 17.5]
    });

    this.reportMarker = window.L.marker(e.latlng, { icon: tempIcon })
      .addTo(this.map)
      .bindPopup("📍 Click here to report an incident")
      .openPopup();

    // Zoom to the clicked location with smooth animation
    this.map.setView(e.latlng, 15, {
      animate: true,
      duration: 1.0
    });

    // Show the modal
    reportModal.classList.remove("hidden");
    reportModal.style.display = "block";
    
    // Focus on the textarea
    setTimeout(() => {
      const messageInput = document.getElementById("report-message");
      if (messageInput) {
        messageInput.focus();
      }
    }, 300);
    
    console.log('Report modal opened');
  }

  setupModalListeners() {
    const reportModal = document.getElementById("report-modal");
    const closeModalBtn = document.getElementById("close-report-modal");
    const reportForm = document.getElementById("report-form");

    // Close modal handler
    if (closeModalBtn) {
      closeModalBtn.addEventListener("click", () => {
        this.closeReportModal();
      });
    }

    // Form submission handler
    if (reportForm) {
      reportForm.addEventListener("submit", (e) => {
        this.handleReportSubmission(e);
      });
    }

    // Close modal when clicking outside
    if (reportModal) {
      reportModal.addEventListener("click", (e) => {
        if (e.target === reportModal) {
          this.closeReportModal();
        }
      });
    }

    // Close modal with Escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && reportModal && !reportModal.classList.contains("hidden")) {
        this.closeReportModal();
      }
    });
  }

  closeReportModal() {
    console.log('Closing report modal...');
    
    const reportModal = document.getElementById("report-modal");
    const reportForm = document.getElementById("report-form");
    
    if (reportModal) {
      reportModal.classList.add("hidden");
      reportModal.style.display = "none";
    }

    // Remove temporary marker
    if (this.reportMarker) {
      this.map.removeLayer(this.reportMarker);
      this.reportMarker = null;
    }

    // Reset form
    if (reportForm) {
      reportForm.reset();
    }

    // Clear selected coordinates
    this.selectedLatLng = null;
  }

  handleReportSubmission(e) {
    e.preventDefault();
    console.log('Handling report submission...');

    const latInput = document.getElementById("report-lat");
    const lngInput = document.getElementById("report-lng");
    const messageInput = document.getElementById("report-message");

    if (!latInput || !lngInput || !messageInput) {
      alert("Form fields not found. Please try again.");
      return;
    }

    const lat = parseFloat(latInput.value);
    const lng = parseFloat(lngInput.value);
    const message = messageInput.value.trim();

    if (!lat || !lng) {
      alert("Please click on the map to select a location first.");
      return;
    }

    if (!message) {
      alert("Please provide a description of the incident.");
      return;
    }

    // Create new report
    const newReport = {
      id: Date.now(),
      lat: lat,
      lng: lng,
      message: message,
      timestamp: new Date().toISOString()
    };

    // Save locally
    this.localReports.push(newReport);
    this.saveReportsToStorage();

    // Handle successful report
    this.handleSuccessfulReport(lat, lng, message, newReport.id);
  }

  saveReportsToStorage() {
    try {
      localStorage.setItem('safenet_reports', JSON.stringify(this.localReports));
      console.log('Reports saved to localStorage');
    } catch (error) {
      console.error('Error saving reports to localStorage:', error);
    }
  }

  handleSuccessfulReport(lat, lng, message, reportId) {
    console.log('Report submitted successfully');
    
    // Show success message
    this.showSuccessMessage("Report submitted successfully! Thank you for helping keep our community safe.");

    // Remove temporary marker
    if (this.reportMarker) {
      this.map.removeLayer(this.reportMarker);
      this.reportMarker = null;
    }

    // Add permanent red marker
    const reportIcon = window.L.divIcon({
      className: 'custom-div-icon',
      html: `
        <div style="
          background-color: #ef4444;
          width: 30px;
          height: 30px;
          border-radius: 50%;
          border: 3px solid white;
          box-shadow: 0 2px 6px rgba(0,0,0,0.3);
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 16px;
        ">⚠️</div>
      `,
      iconSize: [30, 30],
      iconAnchor: [15, 15]
    });

    const newReportMarker = window.L.marker([lat, lng], { icon: reportIcon })
      .addTo(this.map)
      .bindPopup(`
        <div style="text-align: center; min-width: 200px;">
          <strong style="color: #ef4444;">⚠️ New Report</strong><br>
          <p style="margin: 10px 0; font-size: 14px;">${message}</p>
          <small style="color: #666;">Just reported</small><br>
          <small style="color: #999;">ID: ${reportId}</small>
        </div>
      `)
      .openPopup();

    this.reports.push(newReportMarker);

    // Zoom in to the reported location with animation
    this.map.setView([lat, lng], 16, {
      animate: true,
      duration: 1.5
    });

    // Close modal
    this.closeReportModal();

    // Highlight the area with a circle
    this.highlightReportArea(lat, lng);
  }

  showSuccessMessage(message) {
    // Create a temporary success notification
    const notification = document.createElement('div');
    notification.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: #22c55e;
      color: white;
      padding: 15px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      z-index: 10000;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      font-weight: 500;
      max-width: 300px;
      animation: slideIn 0.3s ease;
    `;
    notification.innerHTML = `
      <div style="display: flex; align-items: center; gap: 10px;">
        <span style="font-size: 20px;">✅</span>
        <span>${message}</span>
      </div>
    `;

    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
      }
    `;
    document.head.appendChild(style);

    document.body.appendChild(notification);

    // Remove after 5 seconds
    setTimeout(() => {
      notification.style.animation = 'slideIn 0.3s ease reverse';
      setTimeout(() => {
        if (notification.parentNode) {
          notification.parentNode.removeChild(notification);
        }
      }, 300);
    }, 5000);
  }

  highlightReportArea(lat, lng) {
    // Add a temporary red circle to highlight the area
    const circle = window.L.circle([lat, lng], {
      color: '#ef4444',
      fillColor: '#ef4444',
      fillOpacity: 0.2,
      radius: 200,
      weight: 2
    }).addTo(this.map);

    // Animate the circle
    let opacity = 0.2;
    const fadeInterval = setInterval(() => {
      opacity -= 0.02;
      circle.setStyle({ fillOpacity: opacity });
      if (opacity <= 0) {
        clearInterval(fadeInterval);
        this.map.removeLayer(circle);
      }
    }, 100);
  }

  getDirections(lat, lng) {
    // Open directions in default map app
    const url = `https://www.google.com/maps/dir/?api=1&destination=${lat},${lng}`;
    window.open(url, '_blank');
  }

  // Public method to zoom to a specific location
  zoomToLocation(lat, lng, zoom = 15) {
    this.map.setView([lat, lng], zoom, {
      animate: true,
      duration: 1.0
    });
  }

  // Public method to clear all reports
  clearAllReports() {
    if (confirm('Are you sure you want to clear all reports? This cannot be undone.')) {
      // Remove markers from map
      this.reports.forEach(marker => {
        this.map.removeLayer(marker);
      });
      
      // Clear arrays
      this.reports = [];
      this.localReports = [];
      
      // Clear localStorage
      localStorage.removeItem('safenet_reports');
      
      console.log('All reports cleared');
      this.showSuccessMessage('All reports have been cleared.');
    }
  }

  // Public method to export reports
  exportReports() {
    if (this.localReports.length === 0) {
      alert('No reports to export.');
      return;
    }

    const dataStr = JSON.stringify(this.localReports, null, 2);
    const dataBlob = new Blob([dataStr], { type: 'application/json' });
    const url = URL.createObjectURL(dataBlob);
    
    const link = document.createElement('a');
    link.href = url;
    link.download = `safenet_reports_${new Date().toISOString().split('T')[0]}.json`;
    link.click();
    
    URL.revokeObjectURL(url);
    console.log('Reports exported');
  }
}

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  console.log('DOM loaded, initializing map...');
  
  const mapElement = document.getElementById("map");
  if (!mapElement) {
    console.log('Map element not found, skipping map initialization');
    return;
  }

  // Initialize the map manager
  window.mapManager = new MapManager();
  
  // Add some utility functions to window for debugging
  window.clearReports = () => window.mapManager.clearAllReports();
  window.exportReports = () => window.mapManager.exportReports();
  
  console.log('Map initialization complete');
  console.log('Debug commands: clearReports(), exportReports()');
});

// Enhanced modal styling
const additionalStyles = `
  <style>
    #report-modal {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      backdrop-filter: blur(5px);
      background: rgba(0, 0, 0, 0.5);
    }
    
    #report-modal > div {
      background: white;
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    
    #report-modal h3 {
      color: #dc2626;
      margin-bottom: 15px;
      font-size: 20px;
      font-weight: 600;
    }
    
    #report-modal p {
      color: #6b7280;
      margin-bottom: 20px;
      line-height: 1.5;
    }
    
    #report-modal textarea {
      border: 2px solid #e5e7eb;
      border-radius: 8px;
      padding: 12px;
      font-size: 14px;
      resize: vertical;
      min-height: 100px;
      font-family: inherit;
      transition: border-color 0.2s;
    }
    
    #report-modal textarea:focus {
      outline: none;
      border-color: #dc2626;
      box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    }
    
    #report-modal .button {
      padding: 12px 24px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
      font-size: 14px;
      border: none;
    }
    
    #report-modal .button-primary {
      background: #dc2626;
      color: white;
    }
    
    #report-modal .button-primary:hover {
      background: #b91c1c;
      transform: translateY(-1px);
    }
    
    #report-modal .button-secondary {
      background: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
    }
    
    #report-modal .button-secondary:hover {
      background: #e5e7eb;
    }
    
    .leaflet-popup-content {
      margin: 12px 16px;
      line-height: 1.4;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    
    .leaflet-popup-content strong {
      display: block;
      margin-bottom: 8px;
      font-size: 16px;
    }
    
    .leaflet-popup-content p {
      margin: 8px 0;
      color: #374151;
    }
    
    .leaflet-popup-content small {
      color: #6b7280;
      font-size: 12px;
    }
    
    .leaflet-popup-content button {
      transition: all 0.2s;
    }
    
    .leaflet-popup-content button:hover {
      transform: translateY(-1px);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
`;

document.head.insertAdjacentHTML('beforeend', additionalStyles);