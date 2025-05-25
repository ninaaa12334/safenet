document.addEventListener('DOMContentLoaded', function () {
  // Check if chatbox already exists from your PHP page
  let chatBox = document.getElementById('chatbox');
  let chatButton = document.getElementById('mental-health-chat-toggle');
  
  // If no existing chatbox, create new one (fallback)
  if (!chatBox) {
    // Create chat toggle button
    chatButton = document.createElement('div');
    chatButton.id = 'mental-health-chat-toggle';
    chatButton.innerHTML = `
      <div class="chat-icon">💬</div>
      <div class="chat-pulse"></div>
    `;
    document.body.appendChild(chatButton);

    // Create chat box
    chatBox = document.createElement('div');
    chatBox.id = 'chatbox';
    chatBox.className = 'hidden';
    chatBox.innerHTML = `
      <div class="chat-header">
        <h2 id="chat-title">Mental Health Support</h2>
        <button id="chat-close" aria-label="Close chat">✖</button>
      </div>
      <div class="chat-messages" id="chat-messages">
        <div class="bot-message">Hi! How can I support you today?</div>
      </div>
      <div id="chat-input-area">
        <input type="text" id="chat-input" placeholder="Share what's on your mind..." autocomplete="off" />
        <button type="button" id="chat-send-btn">Send</button>
      </div>
    `;
    document.body.appendChild(chatBox);
  }

  // Enhanced CSS styles
  const styles = document.createElement('style');
  styles.textContent = `
    #mental-health-chat-toggle {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      animation: gentle-bounce 2s ease-in-out infinite;
    }

    @keyframes gentle-bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-5px); }
      60% { transform: translateY(-3px); }
    }

    #mental-health-chat-toggle:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 25px rgba(102, 126, 234, 0.6);
    }

    .chat-icon {
      font-size: 24px;
      color: white;
      position: relative;
      z-index: 2;
    }

    .chat-pulse {
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: rgba(102, 126, 234, 0.3);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      100% { transform: scale(1.4); opacity: 0; }
    }

    #chatbox {
      position: fixed;
      bottom: 90px;
      right: 20px;
      width: 380px;
      max-width: calc(100vw - 40px);
      height: 500px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
      z-index: 999;
      transform: translateY(100%) scale(0.8);
      opacity: 0;
      transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      overflow: hidden;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      display: flex;
      flex-direction: column;
    }

    #chatbox:not(.hidden) {
      transform: translateY(0) scale(1);
      opacity: 1;
    }

    .chat-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 20px 20px 0 0;
    }

    #chat-title {
      font-weight: 600;
      font-size: 16px;
      margin: 0;
    }

    #chat-close {
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      padding: 5px;
      border-radius: 50%;
      transition: background 0.2s;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #chat-close:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    .chat-messages {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
      scroll-behavior: smooth;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .bot-message, .user-message {
      max-width: 80%;
      padding: 12px 16px;
      border-radius: 18px;
      line-height: 1.4;
      font-size: 14px;
      animation: fadeInUp 0.3s ease;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .bot-message {
      background: #f1f3f5;
      color: #333;
      border-bottom-left-radius: 6px;
      align-self: flex-start;
    }

    .user-message {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border-bottom-right-radius: 6px;
      align-self: flex-end;
    }

    #chat-input-area {
      padding: 20px;
      border-top: 1px solid #e9ecef;
      display: flex;
      gap: 12px;
      align-items: center;
    }

    #chat-input {
      flex: 1;
      border: 2px solid #e9ecef;
      border-radius: 25px;
      padding: 12px 16px;
      font-size: 14px;
      outline: none;
      transition: border-color 0.2s;
    }

    #chat-input:focus {
      border-color: #667eea;
    }

    #chat-send-btn {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      border-radius: 25px;
      color: white;
      cursor: pointer;
      padding: 12px 20px;
      font-size: 14px;
      font-weight: 600;
      transition: transform 0.2s;
    }

    #chat-send-btn:hover {
      transform: scale(1.05);
    }

    .quick-options {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
      margin-top: 12px;
    }

    .quick-btn {
      background: white;
      border: 2px solid #e9ecef;
      border-radius: 12px;
      padding: 8px 12px;
      font-size: 12px;
      cursor: pointer;
      transition: all 0.2s;
      text-align: center;
    }

    .quick-btn:hover {
      border-color: #667eea;
      background: #f8f9ff;
      transform: translateY(-1px);
    }

    .typing-indicator {
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 12px 16px;
      background: #f1f3f5;
      border-radius: 18px;
      border-bottom-left-radius: 6px;
      max-width: 80px;
      align-self: flex-start;
    }

    .typing-dot {
      width: 6px;
      height: 6px;
      background: #999;
      border-radius: 50%;
      animation: typing 1.4s infinite;
    }

    .typing-dot:nth-child(2) { animation-delay: 0.2s; }
    .typing-dot:nth-child(3) { animation-delay: 0.4s; }

    @keyframes typing {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-10px); }
    }

    .resource-card {
      background: #f8f9ff;
      border: 1px solid #e1e7ff;
      border-radius: 12px;
      padding: 12px;
      margin-top: 8px;
    }

    .resource-title {
      font-weight: 600;
      color: #4c63d2;
      margin-bottom: 4px;
      font-size: 13px;
    }

    .resource-link {
      color: #667eea;
      text-decoration: none;
      font-size: 12px;
    }

    .resource-link:hover {
      text-decoration: underline;
    }

    .hidden {
      display: none !important;
    }

    @media (max-width: 480px) {
      #chatbox {
        width: calc(100vw - 20px);
        right: 10px;
        bottom: 80px;
        height: 70vh;
      }

      .quick-options {
        grid-template-columns: 1fr;
      }
    }
  `;
  document.head.appendChild(styles);

  // Enhanced mental health response system
  const mentalHealthResponses = {
    anxiety: {
      triggers: ['anxious', 'anxiety', 'worried', 'panic', 'nervous', 'scared', 'fear'],
      responses: [
        "I understand that anxiety can feel overwhelming. You're not alone in this. Let's try a simple breathing exercise: breathe in for 4 counts, hold for 4, then breathe out for 6. Would you like to tell me more about what's making you feel anxious?",
        "Anxiety is your mind's way of trying to protect you, but sometimes it can feel too intense. What you're feeling is valid. Can you describe what physical sensations you're experiencing right now?",
        "Thank you for sharing that with me. Anxiety affects millions of people, and seeking support shows real strength. Have you noticed any specific triggers that tend to increase your anxiety?"
      ],
      resources: [
        { title: "Anxiety Coping Techniques", link: "https://www.nimh.nih.gov/health/topics/anxiety-disorders" },
        { title: "Crisis Text Line", link: "Text HOME to 741741" }
      ]
    },

    depression: {
      triggers: ['depressed', 'depression', 'sad', 'hopeless', 'empty', 'down', 'low'],
      responses: [
        "I hear you, and I want you to know that what you're feeling matters. Depression can make everything feel heavy and difficult. You've taken a brave step by reaching out. How long have you been feeling this way?",
        "Depression can make it hard to see hope, but please know that you matter and things can get better. Even small steps count. Have you been able to talk to anyone else about how you're feeling?",
        "Thank you for trusting me with this. Depression is a real medical condition, not a personal weakness. You deserve support and care. What does a typical day look like for you right now?"
      ],
      resources: [
        { title: "Depression Support", link: "https://www.nimh.nih.gov/health/topics/depression" },
        { title: "National Suicide Prevention Lifeline", link: "988" }
      ]
    },

    stress: {
      triggers: ['stressed', 'stress', 'overwhelmed', 'pressure', 'burnout', 'exhausted'],
      responses: [
        "Stress can really take a toll on both your mind and body. It sounds like you're carrying a lot right now. What are the main sources of stress in your life at the moment?",
        "Feeling overwhelmed is a sign that you're dealing with more than anyone should handle alone. Let's break this down together. What feels most urgent or pressing to you right now?",
        "Stress is your body's natural response to challenges, but chronic stress needs attention. You're wise to recognize it. Have you been able to find any moments of calm or relief lately?"
      ],
      resources: [
        { title: "Stress Management Techniques", link: "https://www.apa.org/topics/stress" },
        { title: "Mindfulness Exercises", link: "https://www.headspace.com" }
      ]
    },

    coping: {
      triggers: ['coping', 'strategies', 'help', 'techniques', 'tools', 'manage'],
      responses: [
        "Here are some evidence-based coping strategies: 1) Deep breathing exercises 2) Progressive muscle relaxation 3) Mindfulness meditation 4) Regular exercise 5) Journaling your thoughts. Which of these resonates with you?",
        "Coping strategies work differently for everyone. Some helpful techniques include: grounding exercises (5-4-3-2-1 method), talking to trusted friends, creative activities, or spending time in nature. What activities usually help you feel better?",
        "Building a toolkit of coping strategies is so important. Consider: establishing routines, practicing self-compassion, setting boundaries, and reaching out for professional support when needed. What's your biggest challenge in managing difficult emotions?"
      ],
      resources: [
        { title: "Coping Skills Toolkit", link: "https://www.dbtselfhelp.com" },
        { title: "Mental Health First Aid", link: "https://www.mentalhealthfirstaid.org" }
      ]
    },

    crisis: {
      triggers: ['suicide', 'kill myself', 'end it all', 'hurt myself', 'self harm', 'die'],
      responses: [
        "I'm really concerned about you and I'm glad you reached out. Your life has value and meaning. Please contact the National Suicide Prevention Lifeline at 988 or text HOME to 741741 right away. Is there someone who can be with you right now?",
        "Thank you for trusting me with something so serious. You deserve immediate professional support. Please call 988 or go to your nearest emergency room. You don't have to go through this alone. Can you promise me you'll reach out for help right now?"
      ],
      resources: [
        { title: "National Suicide Prevention Lifeline", link: "988" },
        { title: "Crisis Text Line", link: "Text HOME to 741741" },
        { title: "Emergency Services", link: "911" }
      ]
    },

    general: {
      triggers: ['hello', 'hi', 'hey', 'how are you', 'good morning', 'good evening'],
      responses: [
        "Hello! I'm here and ready to listen. How are you feeling today? Whether you're having a good day or struggling with something, I'm here to support you.",
        "Hi there! Thank you for reaching out. I'm here to provide a safe space for you to share whatever is on your mind. What would you like to talk about?",
        "Hello! It's good to connect with you. I'm here to offer support, listen without judgment, and help you work through whatever you're experiencing. How can I help you today?"
      ]
    }
  };

  // Get DOM elements
  const input = document.getElementById('chat-input');
  const sendBtn = document.getElementById('chat-send-btn');
  const messages = document.getElementById('chat-messages');
  const closeBtn = document.getElementById('chat-close');

  // Clear existing messages and add welcome message
  if (messages) {
    messages.innerHTML = `
      <div class="bot-message">
        Hi there! 🌟 I'm here to provide mental health support and a listening ear.
        <div class="quick-options">
          <button class="quick-btn" data-message="I'm feeling anxious">😰 Feeling Anxious</button>
          <button class="quick-btn" data-message="I'm feeling depressed">😔 Feeling Down</button>
          <button class="quick-btn" data-message="I'm stressed">😤 Feeling Stressed</button>
          <button class="quick-btn" data-message="I need coping strategies">🛠️ Need Coping Tips</button>
        </div>
      </div>
    `;
  }

  // Enhanced bot response function
  function getBotResponse(message) {
    const lowerMessage = message.toLowerCase();

    // Check for crisis keywords first
    if (mentalHealthResponses.crisis.triggers.some(trigger => lowerMessage.includes(trigger))) {
      return {
        text: mentalHealthResponses.crisis.responses[Math.floor(Math.random() * mentalHealthResponses.crisis.responses.length)],
        resources: mentalHealthResponses.crisis.resources,
        type: 'crisis'
      };
    }

    // Check other categories
    const categories = ['anxiety', 'depression', 'stress', 'coping', 'general'];
    
    for (const categoryName of categories) {
      const category = mentalHealthResponses[categoryName];
      if (category.triggers && category.triggers.some(trigger => lowerMessage.includes(trigger))) {
        return {
          text: category.responses[Math.floor(Math.random() * category.responses.length)],
          resources: category.resources,
          type: categoryName
        };
      }
    }

    // Empathetic fallback responses
    const fallbackResponses = [
      "Thank you for sharing that with me. I can hear that this is important to you. Can you tell me more about how you're feeling?",
      "I appreciate you opening up. Sometimes it helps just to put our thoughts into words. What's been on your mind lately?",
      "It sounds like you have a lot going on. I'm here to listen and support you. What would be most helpful to talk about right now?",
      "Your feelings are valid, and I'm glad you're reaching out. What's one thing that's been particularly challenging for you recently?",
      "I hear you, and I want you to know that you're not alone. What kind of support would be most helpful for you right now?"
    ];

    return {
      text: fallbackResponses[Math.floor(Math.random() * fallbackResponses.length)],
      type: 'supportive'
    };
  }

  function addMessage(text, sender, resources = null) {
    if (!messages) return;
    
    const messageElem = document.createElement('div');
    messageElem.classList.add(`${sender}-message`);
    messageElem.innerHTML = text;

    // Add resources if provided
    if (resources && resources.length > 0) {
      resources.forEach(resource => {
        const resourceCard = document.createElement('div');
        resourceCard.classList.add('resource-card');
        resourceCard.innerHTML = `
          <div class="resource-title">${resource.title}</div>
          <a href="${resource.link}" class="resource-link" target="_blank">${resource.link}</a>
        `;
        messageElem.appendChild(resourceCard);
      });
    }

    messages.appendChild(messageElem);
    messages.scrollTop = messages.scrollHeight;
  }

  function showTypingIndicator() {
    if (!messages) return;
    
    const typingElem = document.createElement('div');
    typingElem.innerHTML = `
      <div class="typing-indicator">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>
    `;
    typingElem.id = 'typing-indicator';
    messages.appendChild(typingElem);
    messages.scrollTop = messages.scrollHeight;
  }

  function removeTypingIndicator() {
    const typingElem = document.getElementById('typing-indicator');
    if (typingElem) {
      typingElem.remove();
    }
  }

  function sendMessage() {
    if (!input || !input.value) return;
    
    const userText = input.value.trim();
    if (!userText) return;

    addMessage(userText, 'user');
    input.value = '';

    showTypingIndicator();

    setTimeout(() => {
      removeTypingIndicator();
      const response = getBotResponse(userText);
      addMessage(response.text, 'bot', response.resources);
    }, 1000 + Math.random() * 1000);
  }

  // Event listeners
  if (chatButton) {
    chatButton.addEventListener('click', () => {
      if (chatBox) {
        chatBox.classList.toggle('hidden');
        if (!chatBox.classList.contains('hidden') && input) {
          setTimeout(() => input.focus(), 300);
        }
      }
    });
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      if (chatBox) {
        chatBox.classList.add('hidden');
      }
    });
  }

  if (sendBtn) {
    sendBtn.addEventListener('click', sendMessage);
  }

  if (input) {
    input.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        sendMessage();
        e.preventDefault();
      }
    });
  }

  // Quick option buttons
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('quick-btn')) {
      const message = e.target.getAttribute('data-message');
      if (input) {
        input.value = message;
        sendMessage();
      }
    }
  });

  console.log('Fixed Mental Health Chatbot initialized successfully');
});