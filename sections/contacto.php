<section id="cotizacion">
  <div class="container">
    <div class="section-head reveal">
      <span class="tag" style="color:var(--silver)">//  Es gratis y sin compromiso</span>
      <h2 style="color:#fff">Pedí tu <span style="color:var(--accent)">cotización</span><br>ahora mismo</h2>
      <p>Completá el formulario y un asesor te responde en menos de 24 horas con una propuesta personalizada.</p>
    </div>

    <div class="form-wrapper reveal">
      <div id="formContent">
        <form id="cotForm" onsubmit="submitForm(event)">
          <div class="form-grid">
            <div class="field-group">
              <label>Nombre completo *</label>
              <input type="text" name="nombre" placeholder="Tu nombre" required>
            </div>
            <div class="field-group">
              <label>Empresa (opcional)</label>
              <input type="text" name="empresa" placeholder="Nombre de tu empresa">
            </div>
            <div class="field-group">
              <label>WhatsApp / Teléfono *</label>
              <input type="tel" name="telefono" placeholder="+595 9XX XXX XXX" required>
            </div>
            <div class="field-group">
              <label>Email *</label>
              <input type="email" name="email" placeholder="tu@email.com" required>
            </div>
            <div class="field-group">
              <label>Ciudad / Localidad</label>
              <input type="text" name="ciudad" placeholder="Asunción, San Lorenzo...">
            </div>
            <div class="field-group">
              <label>¿Para cuándo lo necesitás?</label>
              <select name="urgencia">
                <option value="">Seleccioná urgencia</option>
                <option>Lo antes posible</option>
                <option>En 1 mes</option>
                <option>En 2-3 meses</option>
                <option>Solo explorando opciones</option>
              </select>
            </div>

            <div class="rack-selector span-2">
              <span class="rack-selector-label">¿Qué tipo de rack te interesa? (podés elegir varios)</span>
              <div class="rack-options">
                <div class="rack-option" onclick="toggleRack(this)" data-name="Rack Selectivo">
                  <div class="rack-option-icon"><svg class="icon icon-rack" aria-hidden="true"><use href="#icon-rack"></use></svg></div>
                  <div class="rack-option-name">Rack Selectivo</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Cantilever">
                  <div class="rack-option-icon"><svg class="icon icon-ruler" aria-hidden="true"><use href="#icon-ruler"></use></svg></div>
                  <div class="rack-option-name">Cantilever</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Movibloc">
                  <div class="rack-option-icon"><svg class="icon icon-rocket" aria-hidden="true"><use href="#icon-rocket"></use></svg></div>
                  <div class="rack-option-name">Movibloc</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Ángulo Ranurado">
                  <div class="rack-option-icon"><svg class="icon icon-rack" aria-hidden="true"><use href="#icon-rack"></use></svg></div>
                  <div class="rack-option-name">Ángulo Ranurado</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Dinámicos FIFO">
                  <div class="rack-option-icon"><svg class="icon icon-bolt" aria-hidden="true"><use href="#icon-bolt"></use></svg></div>
                  <div class="rack-option-name">Dinámicos FIFO</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Entrepisos">
                  <div class="rack-option-icon"><svg class="icon icon-rack" aria-hidden="true"><use href="#icon-rack"></use></svg></div>
                  <div class="rack-option-name">Entrepisos</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="Cerramientos">
                  <div class="rack-option-icon"><svg class="icon icon-check-circle" aria-hidden="true"><use href="#icon-check-circle"></use></svg></div>
                  <div class="rack-option-name">Cerramientos</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="A Medida">
                  <div class="rack-option-icon"><svg class="icon icon-ruler" aria-hidden="true"><use href="#icon-ruler"></use></svg></div>
                  <div class="rack-option-name">A Medida</div>
                </div>
                <div class="rack-option" onclick="toggleRack(this)" data-name="No sé, necesito asesoría">
                  <div class="rack-option-icon"><svg class="icon icon-calendar" aria-hidden="true"><use href="#icon-calendar"></use></svg></div>
                  <div class="rack-option-name">No sé, necesito asesoría</div>
                </div>
              </div>
              <input type="hidden" name="racks" id="racksSelected">
            </div>

            <div class="field-group span-2">
              <label>¿Cuánto espacio tenés? (aproximado)</label>
              <select name="espacio">
                <option value="">Seleccioná tamaño</option>
                <option>Menos de 50 m²</option>
                <option>50 a 150 m²</option>
                <option>150 a 500 m²</option>
                <option>500 a 1.000 m²</option>
                <option>Más de 1.000 m²</option>
                <option>No sé exactamente</option>
              </select>
            </div>

            <div class="field-group span-2">
              <label>Contanos más sobre tu proyecto</label>
              <textarea name="mensaje" placeholder="Describí qué necesitás almacenar, dimensiones del espacio, peso aproximado de cargas, o cualquier detalle que nos ayude a darte la mejor propuesta..."></textarea>
            </div>
          </div>

          <div class="form-submit">
            <button type="submit" class="btn btn-accent">
              <svg class="icon icon-clipboard" aria-hidden="true"><use href="#icon-clipboard"></use></svg><span>Enviar Solicitud de Cotización</span>
            </button>
          </div>
          <p class="form-note">Al enviar, te contactaremos por WhatsApp o email. Sin spam, sin compromisos.</p>
        </form>
      </div>

      <div class="form-success" id="formSuccess">
        <div class="form-success-icon" role="img" aria-label="Solicitud enviada con éxito"><svg class="icon icon-party" aria-hidden="true"><use href="#icon-party"></use></svg><span class="sr-only">Solicitud enviada con éxito</span></div>
        <h3>¡Solicitud enviada!</h3>
        <p style="margin-top:.5rem">Un asesor te contactará en menos de 24 horas para darte una propuesta personalizada.</p>
        <div style="margin-top:1.5rem">
          <a href="https://wa.me/595984034538" target="_blank" class="btn btn-accent">
            También podés escribirnos por WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACTO ===== -->
<section id="contacto">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal-left">
        <span class="tag">// Contacto directo</span>
        <h2>Hablemos <span>hoy</span></h2>
        <p>
          Estamos disponibles para atender tus consultas y coordinar visitas. Un asesor técnico te responderá personalmente.
        </p>

        <div class="contact-items">
          <div class="contact-item">
            <div class="ci-icon"><svg class="icon icon-map-pin" aria-hidden="true"><use href="#icon-map-pin"></use></svg></div>
            <div>
              <div class="ci-label">Dirección</div>
              <div class="ci-value">Km 26 Ruta 2, Itauguá, Paraguay</div>
            </div>
          </div>
          <a href="tel:+595984034538" class="contact-item" style="display:flex;">
            <div class="ci-icon"><svg class="icon icon-phone" aria-hidden="true"><use href="#icon-phone"></use></svg></div>
            <div>
              <div class="ci-label">Teléfono</div>
              <div class="ci-value">+595 984 034 538</div>
            </div>
          </a>
          <a href="https://wa.me/595984034538" target="_blank" class="contact-item" style="display:flex;">
            <div class="ci-icon"><svg class="icon icon-whatsapp" aria-hidden="true"><use href="#icon-whatsapp"></use></svg></div>
            <div>
              <div class="ci-label">WhatsApp</div>
              <div class="ci-value">Escribinos ahora</div>
            </div>
          </a>
          <a href="mailto:racksparaguay@gmail.com" class="contact-item" style="display:flex;">
            <div class="ci-icon"><svg class="icon icon-mail" aria-hidden="true"><use href="#icon-mail"></use></svg></div>
            <div>
              <div class="ci-label">Email</div>
              <div class="ci-value">racksparaguay@gmail.com</div>
            </div>
          </a>
        </div>
      </div>

      <div class="reveal-right">
        <div class="horarios-card">
          <h4><svg class="icon icon-calendar" aria-hidden="true"><use href="#icon-calendar"></use></svg><span>Horarios de Atención</span></h4>
          <div class="horario-row">
            <span class="horario-day">Lunes</span>
            <span class="horario-time">8AM – 8PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Martes</span>
            <span class="horario-time">8AM – 8PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Miércoles</span>
            <span class="horario-time">8AM – 8PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Jueves</span>
            <span class="horario-time">8AM – 8PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Viernes</span>
            <span class="horario-time">8AM – 8PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Sábado</span>
            <span class="horario-time">10AM – 2PM</span>
          </div>
          <div class="horario-row">
            <span class="horario-day">Domingo</span>
            <span class="horario-time" style="color:#889">Cerrado</span>
          </div>
          <a href="https://wa.me/595984034538?text=Hola%2C+quiero+agendar+una+reuni%C3%B3n%2C+%C2%BFest%C3%A1n+disponibles%3F" target="_blank" class="horario-cita-btn">
            <svg class="icon icon-calendar" aria-hidden="true"><use href="#icon-calendar"></use></svg><span>Agendar una cita por WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>