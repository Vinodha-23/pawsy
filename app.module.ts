import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {Router} from '@angular/router';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ContactComponent } from './contact/contact.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';

import { GroomingComponent } from './grooming/grooming.component';
import { AboutComponent } from './about/about.component';
import { BlogComponent } from './blog/blog.component';
import { Blog1Component } from './blog/blog1/blog1.component';
import { Blog2Component } from './blog/blog2/blog2.component';
import { Blog3Component } from './blog/blog3/blog3.component';
import { Blog4Component } from './blog/blog4/blog4.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { HttpClientModule } from '@angular/common/http';
import { TestimonialsComponent } from './testimonials/testimonials.component';
import { FaqsComponent } from './faqs/faqs.component';
import { PicComponent } from './pic/pic.component';
import { QuestionsComponent } from './questions/questions.component';

@NgModule({
  declarations: [
    AppComponent,
    ContactComponent,
    HeaderComponent,
    FooterComponent,
    GroomingComponent,
    AboutComponent,
    BlogComponent,
    Blog1Component,
    Blog2Component,
    Blog3Component,
    Blog4Component,
    TestimonialsComponent,
    FaqsComponent,
    PicComponent,
    QuestionsComponent,
  
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

