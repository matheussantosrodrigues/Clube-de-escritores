class Header extends HTMLElement {

    static get observedAttributes() {
        return ['base-url', 'base-nav', 'base-img'];
    }

    constructor() {
        super();
        this.baseUrl = '';
        this.baseNav = '';
        this.baseImg = '';
    }

    connectedCallback() {
        this.render();
    }

    attributeChangedCallback(name, oldValue, newValue) {
        if (name === 'base-url') {
            this.baseUrl = newValue;
        } else if (name === 'base-nav') {
            this.baseNav = newValue;
        } else if (name === 'base-img') {
            this.baseImg = newValue;
        }
        this.render();
    }

    render() {
        this.innerHTML = `
        <header>
            <a href="${this.baseNav}index.html"><img src="${this.baseImg}logo.png" class="logo"/></a>
        
            <nav class="nav-header">
                <ul>
                    <li class="dropdown dropbtn">
                        <div class="fitnessNav">Cadastrar</div>
                        <div class="dropdown-content">
                            <a href="${this.baseUrl}cadastro.php">• Usuário</a>
                        </div>
                    </li>
                    <li id="menu-margem"><a href="${this.baseUrl}login.php">Login</li>
                </ul>
            </nav>
        </header>
        <div class="faixa"></div>
        `;
    }
}

customElements.define("main-header", Header);
